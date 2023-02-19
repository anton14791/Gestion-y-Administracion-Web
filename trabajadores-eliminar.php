<?php
	header("Access-Control-Allow-Origin:*");
	$cn=new mysqli("localhost","root","","demo");
	$codigo=$_POST["codigo"];
	$rs=$cn->query("delete from trabajador where codigo=$codigo");
	$cn->close(); 
?>