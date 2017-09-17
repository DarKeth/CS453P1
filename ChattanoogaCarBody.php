<?php

$bodyStyle="undefined";
if (isset($_REQUEST['bodyStyle']))
{
	Sleep(1);
	$bodyStyle=$_REQUEST['bodyStyle'];
	echo "$bodyStyle";
}

?>