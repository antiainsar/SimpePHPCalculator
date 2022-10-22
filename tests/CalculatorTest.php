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
        
        $result_error = $calculator->subtract("ei ole number",5);
        $this->assertEquals("Argumendid peavad numbrid olema lahutamisel", $result_error);

    }

    public function testMultiply () {

        $calculator = new App\Calculator;
        $result = $calculator->multiply(20,5);
        $this->assertEquals(100, $result);
        $result_error = $calculator->multiply("ei ole number",5);
        $this->assertEquals("Argumendid peavad numbrid olema korrutamisel", $result_error);

    }

    public function testDivide () {

        $calculator = new App\Calculator;
        $result = $calculator->divide(20,5);
        $this->assertEquals(4, $result);

        $result_error1 = $calculator->divide(0, 5);
        $this->assertEquals("Esimene argument peavab olema jagamisel 0-st erinev", $result_error1);

        $result_error2 = $calculator->divide("ei ole number",5);
        $this->assertEquals("Argumendid peavad numbrid olema jagamisel", $result_error2);
 
    }

    public function testSquare () {

        $calculator = new App\Calculator;
        $result = $calculator->square(4,2);
        $this->assertEquals(16, $result);
        $result_error = $calculator->square("ei ole number",5);
        $this->assertEquals("Argumendid peavad numbrid olema astendamisel", $result_error);        

    }
    
    public function testSquareRoot () {

        $calculator = new App\Calculator;
        $result = $calculator->squareroot(16,0);
        $this->assertEquals(4, $result);
        $result_error = $calculator->squareroot("ei ole number",5);
        $this->assertEquals("Argument peab numbriline olema ruutjuure võtmisel", $result_error); 
        $result_error = $calculator->squareroot(-1,5);
        $this->assertEquals("Argument ei saa olla negatiivne", $result_error);  

    }

}

?>