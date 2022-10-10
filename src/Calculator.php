<?php

namespace App;

class Calculator{
    
    public function add($num1, $num2) {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    public function divide($num1, $num2) {
        return $num1 / $num2;
    }
    public function square($num1, $num2) {
        return pow($num1,$num2);
    }
    public function squareroot($num1, $num2) {
        return sqrt ($num1);
    }
}
?>