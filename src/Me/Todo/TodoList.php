<?php

namespace Me\Todo;

class TodoList
{
    public $list_tasks;

    public function list_addTask(Task $task)
    {
        $this->list_tasks->add($task);
    }

    public function hasTasks()
    {
        if($this->list_tasks->count() > 0){
            return true;
        }
        return false;
    }
}
