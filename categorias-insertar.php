<?php 
    header("Access-Control-Allow-Origin: *");
    $cn=new mysqli("localhost","root","","demo");
    $nombre=$_POST["nombre"];
    $descripcion=$_POST["descripcion"];
    $rs=$cn->query("INSERT INTO categoria (nombre,descripcion) 
        values ('$nombre','$descripcion')");

    echo $cn->insert_id;

    $cn->close();
 ?>