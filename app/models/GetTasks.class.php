<?php
function getTasks()
{
    return json_decode(file_get_contents(__DIR__.'\tasks.json'), true);
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