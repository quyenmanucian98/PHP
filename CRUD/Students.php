<?php

include_once "User.php";

class Students extends User
{
    public $class;

    public function __construct($name, $address, $phone, $role, $class)
    {
        parent::__construct($name, $address, $phone, $role);
        $this->class = $class;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function setClass($class)
    {
        $this->class = $class;
    }
}