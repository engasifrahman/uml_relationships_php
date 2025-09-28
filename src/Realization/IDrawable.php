<?php

namespace Uml\Realization;

// 📜 Interface (Contract)
interface IDrawable {
    public function draw(): void;
    public function getArea(): float;
}