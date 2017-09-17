<?php

$engine ="undefined";
if (isset($_REQUEST['engine']))
{
	Sleep(1);
	$engine=$_REQUEST['engine'];
	echo "$engine";
}

?>