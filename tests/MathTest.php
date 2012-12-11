<?php
class MathTest extends PHPUnit_Framework_TestCase {
        private $_math;
        
        protected function setUp() {
                $this->_math = new Math();
        }
        
        public function testCreateObject() {
                $this->assertTrue($this->_math instanceof Math);
        }
        
        public function testSummation() {
                $this->assertEquals(0,$this->_math->summation(0,0));
                $this->assertEquals(5,$this->_math->summation(2,3));
                $this->assertEquals(0,$this->_math->summation(-10,+10));
                $this->assertEquals(5.12,$this->_math->summation(2.07,3.05));
                $this->assertEquals(8.58,$this->_math->summation(2.07,3.05,-2.12,5.58));
                $this->assertEquals(0, $this->_math->summation('foo','bar'));
                $this->assertEquals(14, $this->_math->summation('foo','bar',14));
        }
        
        public function testSubtraction() {
                $this->assertEquals(0,$this->_math->subtraction(0,0));
                $this->assertEquals(-1,$this->_math->subtraction(2,3));
                $this->assertEquals(-20,$this->_math->subtraction(-10,+10));
                $this->assertEquals(-0.98,$this->_math->subtraction(2.07,3.05));
                $this->assertEquals(-4.44,$this->_math->subtraction(2.07,3.05,-2.12,5.58));
                $this->assertEquals(0, $this->_math->subtraction('foo','bar'));
                $this->assertEquals(-14, $this->_math->subtraction('foo','bar',14));
        }
        
        public function testMultiplication() {
                $this->assertEquals(0,$this->_math->multiplication(0,0));
                $this->assertEquals(6,$this->_math->multiplication(2,3));
                $this->assertEquals(-100,$this->_math->multiplication(-10,+10));
                $this->assertEquals(6.3135,$this->_math->multiplication(2.07,3.05));
                $this->assertEquals(-74.6861796,$this->_math->multiplication(2.07,3.05,-2.12,5.58));
                $this->assertEquals(0, $this->_math->multiplication('foo','bar'));
                $this->assertEquals(0, $this->_math->multiplication('foo','bar',14));
        }
        
        public function testDivision() {
                $this->assertEquals(0,$this->_math->division(0,0));
                $this->assertEquals('Division by zero!',$this->_math->division(11,3,0,2));
                $this->assertEquals(2/3,$this->_math->division(2,3));
                $this->assertEquals(-1,$this->_math->division(-10,+10));
                $this->assertEquals(2.07/3.05,$this->_math->division(2.07,3.05));
                $this->assertEquals(2.07/3.05/-2.12/5.58,$this->_math->division(2.07,3.05,-2.12,5.58));
                $this->assertEquals(0, $this->_math->division('foo','bar'));
                $this->assertEquals(0, $this->_math->division('foo','bar',14));
        }
}

?>
