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

// this would be the method to put in the index page for accounts
//$records = accounts::findAll();
//print_r($records);
// this would be the method to put in the index page for todos
//$records = todos::findAll();
//print_r($records);
//this code is used to get one record and is used for showing one record or updating one record
//$record = todos::findOne(2);

$record = accounts::findOne(1);
print_r($record);
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
