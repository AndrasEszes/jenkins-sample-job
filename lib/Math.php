<?php
/**
 * @author <andras.eszes@quantislabs.com>
 */
class Math {
        //put your code here
        public function summation() {
                return array_sum(func_get_args());
        }
        
        public function subtraction() {
                $args = func_get_args();
                $ret = (isset($args[0])) ? $args[0] : 0;
                for($i=1;$i<count($args);$i++) {
                        $ret -= $args[$i];
                }
                return $ret;
        }
        
        public function multiplication() {
                $ret = 1;
                foreach( func_get_args() as $val ) {
                        $ret *= $val;
                }
                return $ret;
        }
        
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
        
        public function avg() {
                $sum = array_sum(func_get_args());
                $db = func_num_args();
                if( $db == 0 )
                        return 0;
                return $sum/$db;
        }
        
        public function exponentiation($base,$power) {
                return pow($base,$power);
        }
}

?>
