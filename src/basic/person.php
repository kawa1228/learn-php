<?php

class Person {
    public $firstName;
    public $lastName;

   // コンストラクタ
    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    // デストラクタ
    public function __destruct() {
        print __CLASS__ . "オブジェクトが破棄されました \n";
    }
    public function show() {
        print "ボクの名前は{$this->lastName}{$this->firstName}です \n";
    }
}
