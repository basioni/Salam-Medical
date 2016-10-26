<?php

class store{
	function get_file($fName){
		$mainArr = array('home','contact','about','services','listphoto','viewphoto');
		if(!in_array($fName,$mainArr)){
			$fName = 'home';
		}
		include($fName.".php");
	}
}


if(!isset($_GET['p'])){
	$_GET['p'] = "home";
}





$store = new store;
$store->get_file($_GET['p']);


?>