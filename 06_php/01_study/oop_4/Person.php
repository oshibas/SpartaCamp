<?php

class Person
{

    private $family_name;
    private $first_name;

    public function __construct($family_name, $first_name)
    {
        $this->family_name = $family_name;
        $this->first_name = $first_name;
    }

    public function getFamilyName()
    {
        return $this->family_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFamilyName($family_name)
    {
        $this->family_name = $family_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function selfIntroduction()
    {
        return "私の名前は" .
                "{$this->getFullName()}です" . PHP_EOL;
    }

    protected function getFullName()
    {
        return "{$this->family_name} {$this->first_name}";
    }
} 
