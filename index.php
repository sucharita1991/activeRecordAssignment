<?php

//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);


define('DATABASE', 'sd686');
define('USERNAME', 'sd686');
define('PASSWORD', 'ZOm1EN5l3');
define('CONNECTION', 'sql1.njit.edu');

//Autuloader class
/*class Manage {
    public static function autoload($class) {
        //you can put any file name or directory here
       // include __NAMESPACE__.$class . '.php';
        include str_replace('\\', '/', $class). '.php';
      // include $class . '.php';
       /* $file_name = str_replace("\\", DIRECTORY_SEPARATOR, $class) . '.php';
        include $file_name;*/
  //  }
//}*/

//spl_autoload_register(array('Manage', 'autoload'));

//include 'model.php';
//include 'database.php';
include 'collection.php';
//include "account.php";
//include "todos.php";
//include "todo.php";
include 'accounts.php';
include "htmlTable.php";
include 'dbConn.php';


//instantiate the main object
$obj = new main();

class main
{

    public function __construct()
    {
        //printing all function outputs

        $form = '<form method="post" enctype="multipart/form-data">';
        $form .= '<h1>Table: Accounts</h1>';

        //select all records
        $form .= '<h2>Select All Records</h2>';
        $records = accounts::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= $tableGen;

        /*//select one record
        $form .= '<h2>Select One Record</h2>';
        $id=2;
        $records = MyProject\components\accounts::findOne($id);
        $tableGen = MyProject\mvcName\htmlTable::generateTableFromOneRecord($records);
        $form .= '<h3>Record retrieved with id: '.$id.'</h3>';
        $form .= $tableGen;

        //insert one record
        $form .= '<h2>Insert One Record</h2>';
        $record = new MyProject\components\account();
        $record->email="sd39@njit.edu";
        $record->fname="test";
        $record->lname="cccc";
        $record->phone="4444";
        $record->birthday="00-00-0000";
        $record->gender="male";
        $record->password="12345";
        $lastInsertedId=$record->save();
        $records = MyProject\components\accounts::findAll();
        $tableGen = MyProject\mvcName\htmlTable::genarateTableFromMultiArray($records);
        $form .= '<h3>After Inserting</h3>';
        $form .= $tableGen;

        //update one record
        $form .= '<h2>Update One Record</h2>';
        $records = MyProject\components\accounts::findOne($lastInsertedId);
        $record = new MyProject\components\account();
        $record->id=$records->id;
        $record->lname="yyyy";
        $record->gender="yyyy";
        $record->save();
        $form .= '<h3>Record update with id: '.$records->id.'</h3>';
        $records = MyProject\components\accounts::findAll();
        $tableGen = MyProject\mvcName\htmlTable::genarateTableFromMultiArray($records);
        $form .= $tableGen;

        //delete one record
        $form .= '<h2>Delete One Record</h2>';
        $records = MyProject\components\accounts::findOne($lastInsertedId);
        $record= new MyProject\components\account();
        $record->id=$records->id;
        $record->delete();
        $form .= '<h3>Record with id: '.$records->id.' is deleted</h3>';
        $form .= '<h3>After Delete</h3>';
        $records = MyProject\components\accounts::findAll();
        $tableGen = MyProject\mvcName\htmlTable::genarateTableFromMultiArray($records);
        $form .= $tableGen;*/

        /*$form .= '<h1>Table: Todos</h1>';

        //select all records
        $form .= '<h2>Select All Records</h2>';
        $records = todos::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= $tableGen;

        //select one record
        $form .= '<h2>Select One Record</h2>';
        $id=2;
        $records = todos::findOne($id);
        $tableGen = htmlTable::generateTableFromOneRecord($records);
        $form .= '<h3>Record retrieved with id: '.$id.'</h3>';
        $form .= $tableGen;

        //insert one record
        $form .= '<h2>Insert One Record</h2>';
        $record = new todo();
        $record->owneremail="bhumi@njit.edu";
        $record->ownerid=12;
        $record->createddate="00-00-0000";
        $record->duedate="11-11-1111";
        $record->message="testmessagebhumi";
        $record->isdone=1;
        $lastInsertedId=$record->save();
        $records = todos::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= '<h3>After Inserting</h3>';
        $form .= $tableGen;

        //update one record
        $form .= '<h2>Update One Record</h2>';
        $records = todos::findOne($lastInsertedId);
        $record = new todo();
        $record->id=$records->id;
        $record->owneremail="bhumi11@njit.edu";
        $record->message="female";
        $record->save();
        $form .= '<h3>Record update with id: '.$records->id.'</h3>';
        $records = todos::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= $tableGen;

        //delete one record
        $form .= '<h2>Delete One Record</h2>';
        $records = todos::findOne($lastInsertedId);
        $record= new todo();
        $record->id=$records->id;
        $record->delete();
        $form .= '<h3>Record with id: '.$records->id.' is deleted</h3>';
        $form .= '<h3>After Delete</h3>';
        $records = todos::findAll();
        $tableGen = htmlTable::genarateTableFromMultiArray($records);
        $form .= $tableGen;*/

        $form .= '</form> ';
        print($form);
    }
}
?>
