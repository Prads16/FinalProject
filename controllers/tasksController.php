<?php
class tasksController extends http\controller
{
    
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }
    public static function all()
    {
        $records = todos::findAll();
        self::getTemplate('all_tasks', $records);
    }
  
    public static function oneUser()
    {
        $records = todos::findTasksbyID($_REQUEST['id']);
        self::getTemplate('all_tasks', $records);
    }
    public static function create()
    {
        self::getTemplate('new_tasks');
    }
    public static function addTask()
    {
        session_start();
        $record = new todo();
        $record->owneremail = $_SESSION["userEmail"];
        $record->ownerid = $_SESSION["userID"];
        $record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $record->save();
        header('Location: index.php?page=tasks&action=oneUser&id='.$_SESSION["userID"]);
    }
  
     public static function editTask()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);
    }
   
    public static function store()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->body = $_REQUEST['body'];
        $record->save();
        print_r($_POST);
    }
    public static function save() 
    {
        session_start();
        $task = todos::findOne($_REQUEST['id']);
        $task->owneremail = $_POST['owneremail'];
        $task->ownerid = $_SESSION['userID'];
        $task->createddate = $_POST['createddate'];
        $task->duedate = $_POST['duedate'];
        $task->message = $_POST['message'];
        $task->isdone = $_POST['isdone'];
        $task->save();
        header('Location: index.php?page=tasks&action=oneUser&id='.$_SESSION["userID"]);
    }

    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        session_start();
        header('Location: index.php?page=tasks&action=oneUser&id='.$_SESSION["userID"]);
    }

     public static function update()
    {
        $record = todos::findOne($_REQUEST['id']);
        $task->owneremail = $_POST['owneremail'];
        $task->ownerid = $_SESSION['userID'];
        $record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $record->save();
        session_start();
        header('Location: index.php?page=tasks&action=oneUser&id='.$_SESSION["userID"]);
    }
}