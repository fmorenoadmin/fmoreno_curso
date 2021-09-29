<?php
	require_once($rut.'constant.php');
	//-----------------------------------
	if(isset($_REQUEST['p'])){
		$pid = base64_decode($_REQUEST['p']);
	}
	if(isset($_REQUEST['v'])){
		$vid = base64_decode($_REQUEST['v']);
	}
	//-----------------------------------