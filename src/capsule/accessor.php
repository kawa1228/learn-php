<?php
require_once 'TriangleFigure.php';

$tri = new TriangleFigure();
// $tri->base = -10; // 負数
// $tri->height = 'Moji'; // 文字列
$tri->setBase(-10);
$tri->setHeight(-10); // 負数なので無視

print "三角形の面積：{$tri->getArea()}"; // 角形の面積：0.5
