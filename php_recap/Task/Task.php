<?php


class Task {

    protected $description;

    protected $completed = false;
    
    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed=true;
    }

    public function description()
    {
        return $this->description;
    }
}

$task=[
    new Task("Go To Store"),
    new Task('Go To The Market'),
    new Task("Finish The Project")
];
$task[2]->complete();

// var_dump($task->isComplete());

// var_dump($task->complete());

// var_dump($task);