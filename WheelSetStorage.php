<?php

	$wheelSetStorage = array();
	
	function storeWheelSet()
	{
		array_push($wheelSetStorage, $_SESSION["wheelStyle"]+$_SESSION["wheelColor"]);
	}

	function getWheelSet()
	{
		return array_shift($wheelSetStorage);
	}
	
	function getArraySize()
	{
		return count($wheelSetStorage);
	}
	
	if (isset($_REQUEST['unitsInStorage']))
	{
		echo getArraySize();
	}
	
	if (isset($_REQUEST['storeWheelSet']))
	{
		storeWheelSet();
		echo getArraySize();
	}
	
	if (isset($_REQUEST['getWheelSet']))
	{
		echo getWheelSet();
	}

	if (isset($_REQUEST['wheelReady']))
	{
		if(empty($wheelSetStorage))
		{
			echo "false";
		}else
		{
			echo "true"
		}
	}
?>