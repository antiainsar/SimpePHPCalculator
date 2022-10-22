<?php

namespace App;

class Calculator{
    
    public function add($num1, $num2) {
        if(is_numeric($num1) and is_numeric($num2)) {
            return $num1 + $num2;
        } else {
            return "Argumendid peavad numbrid olema liitmisel";
        }
    }

    public function subtract($num1, $num2) {
        if(is_numeric($num1) and is_numeric($num2)) {
            return $num1 - $num2;
         } else {
            return "Argumendid peavad numbrid olema lahutamisel";
        }
    }

    public function multiply($num1, $num2) {
        if(is_numeric($num1) and is_numeric($num2)) {
            return $num1 * $num2;
        } else {
            return "Argumendid peavad numbrid olema korrutamisel";
        }
    }

    public function divide($num1, $num2) {
        if($num1 == 0 && !is_string($num1)) {
            return "Esimene argument peavab olema jagamisel 0-st erinev";
        }
        elseif(is_numeric($num1) and is_numeric($num2)) {
            return $num1 / $num2;
        } else {
            return "Argumendid peavad numbrid olema jagamisel";
        }
    }
    public function square($num1, $num2) {
        if(is_numeric($num1) and is_numeric($num2)) {
            return pow($num1,$num2);
        } else {
            return "Argumendid peavad numbrid olema astendamisel";
        }
    }
    public function squareroot($num1, $num2) {
        if($num1 < 0) {
            return "Argument ei saa olla negatiivne";
        }
        elseif(is_numeric($num1) and is_numeric($num2)) {
            return sqrt ($num1);
        } else {
            return "Argument peab numbriline olema ruutjuure võtmisel";
        }
    }
}
?>