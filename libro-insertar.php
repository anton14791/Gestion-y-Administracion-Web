<?php
    header("Access-Control-Allow-Origin:*");
    $cn=new mysqli("localhost","root","","bdparcial");
    $titulo=$_POST["titulo"];
    $autor=$_POST["autor"];
    $editorial=$_POST["editorial"];
    $precio=$_POST["precio"];
    $rs=$cn->query("INSERT INTO libro (titulo,autor,editorial,precio) 
        values ('$titulo','$autor','$editorial','$precio')");
    echo $cn->insert_id;
    $cn->close(); 
?>
