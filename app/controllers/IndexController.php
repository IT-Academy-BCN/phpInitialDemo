<?php

require ROOT_PATH . '/app/models/Task.class.php';


class IndexController extends Controller
{
    
	public function indexAction()
    { 
        //Pas 1: Carregar tasques
        $tasks = new Task;
        $tasks->getTasks();
        
        //Pas 2: Paso tasques a la vista
        return $tasks;
        //Pas 3: Invoco la vista
       $this->view-> = ;
    }

    
}

