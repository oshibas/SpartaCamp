<?php
//require_once __DIR__ '/User.php'

class User
{
    public $name = 'Bob';
    public $age = 21;

    public function greet($to) {
        return "こんにちは{$to}さん" . PHP_EOL;
    }

    public function selfIntroduction() {
        return "私の名前は{$this->name}です" . PHP_EOL . 
        "年齢は{$this->age}歳です";
    }
}
