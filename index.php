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

$form = '<form method="post" enctype="multipart/form-data"><center>';
$form .= '<h1>Select All Records</h1>';
$records = accounts::findAll();
$tableGen = htmlTable::genarateTableFromMultiArray($records);
$form .= $tableGen;

$form .= '<h1>Select One Record</h1>';
$records = accounts::findOne(1);
$tableGen = htmlTable::generateTableFromOneRecord($records);
$form .= $tableGen;

$form .= '</center></form> ';
print($form);

/* $records = todos::findAll();
 $tableGen = htmlTable::genarateTableFromMultiArray($records);
 $form .= 'Add one record: <input class="button" type="submit" value="Add Record" name="addRow2">';
 $form .= $tableGen;*/


//this is used to save the record or update it (if you know how to make update work and insert)
// $record->save();
//$record = accounts::findOne(1);
//This is how you would save a new todo item
/*$record = new todo();
$record->message = 'some task';
$record->isdone = 0;
//$record->save();
print_r($record);
$record = todos::create();
print_r($record);*/

?>
