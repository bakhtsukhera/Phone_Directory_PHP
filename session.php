<?php 
session_start();
if(!isset($_SESSION['SESS_ID']))
{
	header("location:index.php");
}
?>