<?php
	
	$engineStorage = array();
	
	function storeEngine()
	{
		array_push($engineStorage, $_SESSION["engine"]);
	}

	function getEngine()
	{
		echo array_shift($engineStorage);
	}

	function getArraySize()
	{
		return count($engineStorage);
	}
	
	if (isset($_REQUEST['unitsInStorage']))
	{
		echo getArraySize();
	}
	
	if (isset($_REQUEST['storeEngine']))
	{
		storeEngine();
		echo getArraySize();
	}
	
	if (isset($_REQUEST['getEngine']))
	{
		echo getEngine();
	}
	if (isset($_REQUEST['engineReady']))
	{
		if(empty($engineStorage)){
			echo "false";
		}else{
			echo "true"
		}
	}
?>