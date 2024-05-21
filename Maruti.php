<?php
include_once './Car.php';
class Maruti implements Car{
    public function color(){
        echo "color";
    }
    public function body(){

    }
}

$m = new Maruti();

$m->color();

?>