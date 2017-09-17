<?php
$wheelStyle="undefined";
if (isset($_REQUEST['wheelStyle']))
{
	Sleep(1);
	$wheelStyle=$_REQUEST['wheelStyle'];
	echo "$wheelStyle";
}
?>