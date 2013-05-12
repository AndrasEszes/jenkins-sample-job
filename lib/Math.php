<?php
/**
* A Math osztály egy matematikai műveleteket megvalósító osztály
*
* Használat:
* $math = new Math();
* echo $math->summation(1,2,3,4,5); // 15
* echo $math->division(12,2,3) // 2
*
* @package  Mathematical
* @author   Eszes András <andras.eszes@quantislabs.com>
* @version  $Revision: 1.0 $
* @access   public
*/
class Math {
  
  /**
* A paraméterben átadott számok összege. A paraméterben kapott elemeket összadja, ha lehetséges.
* 
* @access public
* @param int|float
* @return int|float
*/
  public function summation() {
    return array_sum(func_get_args());
  }
  
  /**
* A paraméterben kapott számokat kivonja az első paraméterként kapott számból.
* 
* @access public
* @param int|float
* @return int|float
*/
  public function subtraction() {
    $args = func_get_args();
    $ret = (isset($args[0])) ? $args[0] : 0;
    for($i=1;$i<count($args);$i++) {
      $ret -= $args[$i];
    }
    return $ret;
  }
  
  /**
* A paraméterként kapott elemek szorzatát adja vissza
* 
* @access public
* @param int|float
* @return int|float
*/
  public function multiplication() {
    $ret = 1;
    foreach( func_get_args() as $val ) {
      $ret *= $val;
    }
    return $ret;
  }
  
  /**
* Ez első paraméterben adott számot elosztja az utána következőkkel.
* Nullával való osztás esetén "Division by zero!" üzenetet ad vissza.
* 
* @access public
* @param int|float
* @return int|float|string
*/
  public function division() {
    $args = func_get_args();
    $ret = (isset($args[0])) ? $args[0] : 0;
    if( $ret == 0 )
      return 0;
    else {
      for($i=1;$i<count($args);$i++) {
        if( $args[$i] == 0 ) return 'Division by zero!';
        $ret /= $args[$i];
      }
    }
    return $ret;
  }
  
  /**
* A paraméterben kapott számok átlagát adja vissza.
* 
* @access public
* @param int|float
* @return int|float
*/
  public function avg() {
    $sum = array_sum(func_get_args());
    $db = func_num_args();
    if( $db == 0 )
      return 0;
    return $sum/$db;
  }
  
  /**
* A hatványozás műveletet valósítja meg.
* 
* @access public
* @param int|float $base
* @param int|float $power
* @return int|float
*/
  public function exponentiation($base,$power) {
    return pow($base,$power);
  }
  
  public function dummyMethod($number) {
    if( $number > 10 )
      return 10;
    else
      return 0;
  }
}

?>
