<?php
class TriangleFigure {
    public $base;
    public $height;

    // 初期化
    public function __construct() {
        $this->base = 1;
        $this->height = 1;
    }

    // 面積を取得
    public function getArea(): float {
        return $this->base * $this->height / 2;
    }
}
