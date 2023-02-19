<?php 
    header("Access-Control-Allow-Origin: *");
    $cn=new mysqli("localhost","root","","demo");
    $rs=$cn->query("Select * from categoria");
    while ($row=$rs->fetch_assoc()) 

    {
    	$res[]=$row;
    }
    echo json_encode($res,JSON_UNESCAPED_UNICODE);
    $cn->close();
 ?>