<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MathTest
 *
 * @author andras.eszes
 */
class MathTest extends PHPUnit_Framework_TestCase {
        private $_math;
        public function testCreateObject() {
                $this->_math = new Math();
                $this->assertTrue($this->_math instanceof Math);
        }
}

?>
