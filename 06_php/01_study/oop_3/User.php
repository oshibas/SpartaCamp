<?php

class User
{
    private $name;
    private $age;
    private $address;

    public function __construct($name, $age, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function selfIntroduction()
    {
        return "私の名前は{$this->name}です" . PHP_EOL .
                "年齢は{$this->age}歳です" . PHP_EOL . 
                "居住地は{$this->address}です" . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

        public function setAddress($address)
    {
        $this->address = $address;
    }
} 
