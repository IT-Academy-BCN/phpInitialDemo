<?php

class TaskModel extends Model
{
    private $database;
    private $tasks;

    public function __construct() {
        $this->database = file_get_contents(ROOT_PATH . '/db/tasks.json');
    }

    public function getTasks(){
        $this->tasks = json_decode($this->database, true);
        return $this->tasks;
    }

    public function getTaskById($taskId){

        $this->tasks = json_decode($this->database, true);

        $tasks = ($this->tasks);
        
        foreach ($tasks as $index => $id ) {
            if ($taskId == $id["id"]){
                $taskToView = ($tasks[$index]);
				return $taskToView;
            }
        }
        
    }
    
}

?>
