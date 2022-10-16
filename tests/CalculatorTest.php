<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd () {

        $calculator = new App\Calculator;

        $result = $calculator->add(20,5);
        $this->assertEquals(25, $result);
        $result_error = $calculator->add("ei ole number",5);
        $this->assertEquals("Argumendid peavad numbrid olema liitmisel", $result_error);
        


    }
    
    public function testSubtract () {

        $calculator = new App\Calculator;
        $result = $calculator->subtract(20,5);

        $this->assertEquals(15, $result);

    }

    public function testMultiply () {

        $calculator = new App\Calculator;
        $result = $calculator->multiply(20,5);
        $this->assertEquals(100, $result);

    }

    public function testDivide () {

        $calculator = new App\Calculator;
        $result = $calculator->divide(20,5);
        $this->assertEquals(4, $result);

    }

    public function testSquare () {

        $calculator = new App\Calculator;
        $result = $calculator->square(4,2);
        $this->assertEquals(16, $result);

    }
    
    public function testSquareRoot () {

        $calculator = new App\Calculator;
        $result = $calculator->squareroot(16,0);
        $this->assertEquals(4, $result);

    }

}

?>