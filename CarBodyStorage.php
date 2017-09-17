<?php

	$carBodyStorage = array();
	$_SESSION['test'] = array();
	
	function storeCarBody($bodyStyle)
	{
		array_push($_SESSION['test'], $bodyStyle);
	}

	function getCarBody()
	{
		//echo array_shift($_SESSION['test']);
		echo $_SESSION['test'][0];
	}

	function getArraySize()
	{
		return count($_SESSION['test']);
	}
	
	if (isset($_REQUEST['unitsInStorage']))
	{
		echo getArraySize();
	}
	
	if (isset($_REQUEST['storeCarBody']))
	{
		storeCarBody($_REQUEST['storeCarBody']);
		echo getArraySize();
	}
	
	if (isset($_REQUEST['getCarBody']))
	{
		echo getCarBody();
	}



?>