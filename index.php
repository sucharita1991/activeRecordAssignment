<?php

//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);


define('DATABASE', 'sd686');
define('USERNAME', 'sd686');
define('PASSWORD', 'ZOm1EN5l3');
define('CONNECTION', 'sql1.njit.edu');

//Autuloader class
class Manage {
    public static function autoload($class) {
        //you can put any file name or directory here
        include $class . '.php';
    }
}

spl_autoload_register(array('Manage', 'autoload'));

//printing all function outputs

$form = '<form method="post" enctype="multipart/form-data">';
$form .= '<h1>Select All Records</h1>';
$records = accounts::findAll();
$tableGen = htmlTable::genarateTableFromMultiArray($records);
$form .= $tableGen;

$form .= '<h1>Select One Record</h1>';
$id=2;
$records = accounts::findOne($id);
$tableGen = htmlTable::generateTableFromOneRecord($records);
$form .= '<h3>Record retrieved with id: '.$id.'</h3>';
$form .= $tableGen;

$form .= '<h1>Insert One Record</h1>';
//insert a new record
$record = new account();
$record->email="bhumi@njit.edu";
$record->fname="bhumi";
$record->lname="merai";
$record->phone="2222";
$record->birthday="00-00-0000";
$record->gender="female";
$record->password="1234";
$record->save();
$records = accounts::findAll();
$tableGen = htmlTable::genarateTableFromMultiArray($records);
$form .= '<h3>After Inserting</h3>';
$form .= $tableGen;

$form .= '<h1>Update One Record</h1>';
//update a new record
$id=16;
$record = new account();
$record->id=$id;
$record->lname="shirsath";
$record->gender="female1";
$record->save();
$records = accounts::findAll();
$tableGen = htmlTable::genarateTableFromMultiArray($records);
$form .= '<h3>Record update with id: '.$id.'</h3>';
$form .= $tableGen;

$form .= '<h1>Delete One Record</h1>';
$record= new account();
$id=16;
$record->delete($id);
$form .= '<h3>Record with id: '.$id.' is deleted</h3>';
$form .= '<h3>After Delete</h3>';
$records = accounts::findAll();
$tableGen = htmlTable::genarateTableFromMultiArray($records);
$form .= $tableGen;

$form .= '</form> ';
print($form);

?>
