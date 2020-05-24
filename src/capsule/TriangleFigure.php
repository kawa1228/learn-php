<?php
class TriangleFigure {
    private $base;
    private $height;

    // 初期化
    public function __construct() {
        $this->setBase(1);
        $this->setHeight(1);
    }

    // baseのゲッター・セッター
    public function getBase(): float {
        return $this->base;
    }
    public function setBase(float $base) {
        if($base > 0) {
            $this->base = $base;
        }
    }
    // heightのゲッター・セッター
    public function getHeight():float {
        return $this->height;
    }
    public function setHeight(float $height) {
        if($height > 0) {
            $this->height = $height;
        }
    }

    // 面積を取得
    public function getArea(): float {
        return $this->getBase() * $this->getHeight() / 2;
    }
}
