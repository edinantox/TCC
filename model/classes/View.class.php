<?php
class View{
    function __construct(){

        switch(substr(strrchr($_SERVER['REQUEST_URI'],"?"),1)){
            case 'cadastro':$c="Cadastro";
                break;
            case 'categorias':$c="Categorias";
                break;
            case 'admin':$c="Admin";
                break;

            default:$c="Main";
                break;

        }

        require_class($c);
        new $c;
    }

}
?>
