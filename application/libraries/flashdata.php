<?php

class flashdata{



	function __construct(){
		session_start();
	}



	function set($index,$msg){
		$_SESSION[$index] = $msg;
	}

	function show($index){
		if(isset($_SESSION[$index])){
			$msg = $_SESSION[$index];
			unset($_SESSION[$index]);
			return $msg;
		}
	}
}


?>