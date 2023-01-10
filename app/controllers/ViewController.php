<?php

require ROOT_PATH . '/app/models/Task.class.php';


class ViewController extends Controller
{
    
	public function viewAction()
    { 
        //Pas 1: Carregar tasques
        $tasks = new Task;
        
        $allTasks = $tasks->getTasks();
        $taskId = $allTasks->$_GET['id'];

        $taskById = $tasks->getTaskById($taskId);
        echo $taskById;
        //Pas 2: Paso tasques a la vista
        
        
        //Pas 3: Invoco la vista
    }

    
}

