<?php
	header("Access-Control-Allow-Origin:*");
	$cn=new mysqli("localhost","root","","demo");
	$idcategoria=$_POST["idcategoria"];
	$rs=$cn->query("delete from categoria where idcategoria=$idcategoria");
	$cn->close(); 
?>