<?php
function getTasks()
{
    $tasks = json_decode(file_get_contents(__DIR__.'\tasks.json'), true);
    echo '<pre>';
    var_dump($tasks);
    echo '<pre>';
    exit;
}

function getTaskById($id)
{
    
}

function createTask($data)
{

}

function updateTask($data, $id)
{
    
}

function deleteTask($id)
{
    
}

?>