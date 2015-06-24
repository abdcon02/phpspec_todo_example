<?php

namespace Me\Todo;

class TaskCollection implements \Countable
{
    public $tasks;

    public function add(Task $task)
    {
        $this->tasks[] = $task;
    }

    public function count()
    {
        $task_list = $this->tasks;
        return count($task_list);
    }
}
