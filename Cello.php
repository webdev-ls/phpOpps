<?php
include_once './Pen.php';
class Cello extends Pen{

    public function getType(){
        echo $this->type;
    }
}


$pen = New Cello();

$pen->getType();


?>