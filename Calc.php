<?php
class Calc{

    public static function sum(){
        $args = func_get_args();
        print_r($args);
        return array_sum($args);

    }
}


?>