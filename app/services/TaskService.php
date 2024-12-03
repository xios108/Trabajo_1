<?php

namespace App\services;
use App\Models\tasks;

class TaskService
{
    public function getTask()
    {
        return tasks::all();
    }
}
?>