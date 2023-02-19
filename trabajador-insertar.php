<?php 
    
header("Access-Control-Allow-Origin: *");
    $cn=new mysqli("localhost","root","","demo");
    $nombre=$_POST["nombre"];
     $sueldo=$_POST["sueldo"];
    $rs=$cn->query("INSERT INTO trabajador (Nombre,Sueldo) values ('$nombre','$sueldo');"); 

    echo $cn->insert_id;
 
    $cn->close();
 

 ?>