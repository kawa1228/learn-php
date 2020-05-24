<?php
require_once 'TriangleFigure.php';

$tri = new TriangleFigure();
$tri->base = -10; // 負数
$tri->height = 'Moji'; // 文字列

print "三角形の面積：{$tri->getArea()}"; // 三角形の面積：0
