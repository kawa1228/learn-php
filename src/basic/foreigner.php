<?php
require_once 'person.php';

class Foreigner extends Person {
    public $middleName;

   // コンストラクタ
    public function __construct(string $firstName, string $middleName, string $lastName) {
        parent::__construct($firstName, $lastName);
        $this->middleName = $middleName;
    }

    public function show() {
        print "ボクの名前は{$this->lastName}{$this->middleName}{$this->firstName}です \n";
    }
}

$f = new Foreigner('太郎','クリス', '山田');
$f->show();
