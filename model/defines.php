<?php

//---SESSION
	session_start();
	if(isset($_COOKIE['login'])){
		$login=1;
		setcookie('login',$_SESSION['user'],time()+1800,'/');
	}else{
		$login=0;
	}
	define("LOGIN",$login);
//---/SESSION


//---PATH's
	define("ROOT",'/www/TCC');
	define("VIEW",'./view');
	define("IMAGENS",VIEW.'/imagens');
	define("PAGINAS",'./control/paginas');
	define("JS",VIEW.'/js');
	define("CSS",VIEW.'/css');
	define("CLASSES",ROOT.'/model/classes/');


//---/PATH's



//---LOAD CLASS
	function require_class($classname) {

		if(file_exists(CLASSES.$classname.".class.php")) {
			require_once(CLASSES.$classname.".class.php");
		} else {
			echo "Classe inválida";

		}
	}
//---/LOAD CLASS
?>
