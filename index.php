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

//instantiate the main object
$obj = new main();

class main
{

    public function __construct()
    {
        //printing all function outputs

        $form = '<form method="post" enctype="multipart/form-data">';
        /*$form .= '<h1>Table: Accounts</h1>';

        //select all records
        $form .= '<h2>Select All Records</h2>';
        $records = accounts::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= $tableGen;

        //select one record
        $form .= '<h2>Select One Record</h2>';
        $id=2;
        $records = accounts::findOne($id);
        $tableGen = htmlTable::generateTableFromOneRecord($records);
        $form .= '<h3>Record retrieved with id: '.$id.'</h3>';
        $form .= $tableGen;

        //insert one record
        $form .= '<h2>Insert One Record</h2>';
        $record = new account();
        $record->email="test27@njit.edu";
        $record->fname="test";
        $record->lname="cccc";
        $record->phone="4444";
        $record->birthday="00-00-0000";
        $record->gender="male";
        $record->password="12345";
        $record->save();
        $records = accounts::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= '<h3>After Inserting</h3>';
        $form .= $tableGen;

        //update one record
        $form .= '<h2>Update One Record</h2>';
        $id=25;
        $record = new account();
        $record->id=$id;
        $record->lname="xxxx25";
        $record->gender="yyyy";
        $record->save();
        $records = accounts::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= '<h3>Record update with id: '.$id.'</h3>';
        $form .= $tableGen;

        //delete one record
        $form .= '<h2>Delete One Record</h2>';
        $record= new account();
        $id=25;
        $record->delete($id);
        $form .= '<h3>Record with id: '.$id.' is deleted</h3>';
        $form .= '<h3>After Delete</h3>';
        $records = accounts::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= $tableGen;*/

        $form .= '<h1>Table: Todos</h1>';

        //select all records
        $form .= '<h2>Select All Records</h2>';
        $records = todos::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= $tableGen;

        //select one record
        $form .= '<h2>Select One Record</h2>';
        $id=7;
        $records = todos::findOne($id);
        $tableGen = htmlTable::generateTableFromOneRecord($records);
        $form .= '<h3>Record retrieved with id: '.$id.'</h3>';
        $form .= $tableGen;

        //insert one record
        $form .= '<h2>Insert One Record</h2>';
        $record = new todo();
        $record->owneremail="sucharita9@njit.edu";
        $record->ownerid=11;
        $record->createddate="00-00-0000";
        $record->duedate="11-11-1111";
        $record->message="test";
        $record->isdone=1;
        $record->save();
        $records = todos::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= '<h3>After Inserting</h3>';
        $form .= $tableGen;

        //update one record
        $form .= '<h2>Update One Record</h2>';
        $id=12;
        $record = new todo();
        $record->id=$id;
        $record->owneremail="shirsath@njit.edu";
        $record->message="fema";
        $record->save();
        $records = todos::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= '<h3>Record update with id: '.$id.'</h3>';
        $form .= $tableGen;

        //delete one record
        $form .= '<h2>Delete One Record</h2>';
        $record= new todo();
        $id=12;
        $record->delete($id);
        $form .= '<h3>Record with id: '.$id.' is deleted</h3>';
        $form .= '<h3>After Delete</h3>';
        $records = todos::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= $tableGen;

        $form .= '</form> ';
        print($form);
    }
}
?>
