<?php

require ROOT_PATH . '/app/models/Task.class.php';


class IndexController extends Controller
{
    
	public function indexAction()
    { 
        //Pas 1: Carregar tasques
        $tasks = new Task;
        $allTasks = $tasks->getTasks();
        
        //Pas 2: Paso tasques a la vista
        
        
        $this->view->allTasks = $allTasks;
        
        //Pas 3: Invoco la vista
    }

    
}

