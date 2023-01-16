<?php

require ROOT_PATH . '/app/models/Task.class.php';


class NewController extends Controller
{

	public function NewAction()
    { 
        
        $tasks = new TaskModel;
        $allTasks = $tasks->getTasks();
        
        //$_POST[''];
        
        $this->view->allTasks = $allTasks;
        
        
    }

    
}

