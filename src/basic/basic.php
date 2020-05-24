<?php
require_once 'person.php';
$p = new Person('太郎', '山田');
$p->show(); // ボクの名前は山田太郎です Personオブジェクトが破棄されました
