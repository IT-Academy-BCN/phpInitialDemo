<?php

class Task extends Model
{
    private $database;

    public function __construct() {
        $this->database = file_get_contents(ROOT_PATH . '/db/tasks.json');
    }

    public function getTasks(){
        $tasks = json_decode($this->database, true);
        return $tasks;
    }

    public function getTaskById($id){
        $allTasks = $tasks->getTasks();
        $tasks = json_decode($this->database, true);
        return $tasks;
    }
    
}

?>
