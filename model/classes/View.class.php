<?php
class View{
    function __construct(){

        switch(substr(strrchr($_SERVER['REQUEST_URI'],"?"),1)){
            case 'cadastro':$c="Cadastro";
                break;
            case 'categorias':$c="Categorias";
                break;

            default:$c="Main";
                break;

        }
    }

}
?>
