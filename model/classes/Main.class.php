<?php
class Main{
    function __construct(){
        $this->frame();
    }

    function frame(){
        if(!isset($_GET['an'])){
            include_once PAGINAS.'/main.php';
        }

    }
}
?>
