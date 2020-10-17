<?php

// class LightSwitch () {

//     public function on()
//     {
        
//     }

//     public function off()
//     {
//         # code...
//     }

//     private function connect()
//     {
//         # code...
//     }

//     private function active()
//     {
//         # code...
//     }

// }

// $swicth = new LightSwitch();
// $swicth->connect;


class Person {

    public $name;
    protected $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if($age<18)
        {
            exit("BOCAHHHHH");
        }
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age ;
    }

    public function __toString()
    {
        return $this->name;
    }
}

$jhon = new Person($argv[1]);
$jhon->setAge($argv[2]);
echo "Your Name is ".$jhon." and your age ".$jhon->getAge();