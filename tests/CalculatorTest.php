<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd () {

        $result = 20 + 5;
        $this->assertEquals(25, $result);

    }
    
    public function testSubtract () {

        $result = 20 - 5;
        $this->assertEquals(15, $result);

    }

    public function testMultiply () {

        $result = 20 * 5;
        $this->assertEquals(100, $result);

    }

    public function testDivide () {

        $result = 20 / 5;
        $this->assertEquals(4, $result);

    }

    public function testSquare () {

        $result = pow(4,2);
        $this->assertEquals(16, $result);

    }
    
    public function testSquareRoot () {

        $result = sqrt(16);
        $this->assertEquals(4, $result);

    }

}

?>