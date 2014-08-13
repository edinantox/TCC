<?php
class View{
    function __construct(){

        switch(substr(strrchr($_SERVER['REQUEST_URI'],"?"),1)){
            case 'registro':;
                break;
            case 'categorias':;
                break;
            default:;
                break;

        }
    }

}
?>
