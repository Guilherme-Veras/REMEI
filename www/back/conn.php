<?php
$iphost = "localhost"; //ip/host
$dbhost = "id7397586_remei"; //databse
$userhost = "id7397586_remei"; //usuario
$passwordhost = "a147852369"; //senha
$tipohost = "mysql"; //mysql/postgree/
/*
try {
	if($tipohost == "mysql"){
  		$conn = new PDO("mysql:host=".$iphost.";dbname=".$dbhost."", $userhost, $passwordhost); 
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    if($tipohost == "postgree"){
    	$conn = new PDO("pgsql:host=".$iphost." dbname=".$dbhost." user=".$userhost." password=".$passwordhost.""); 
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
} catch(PDOException $e) {
	if ($e->getCode() == '2002'){
        header("Location: erros/2");
	}else{
		echo 'ERRO NO BANCO DE DADOS: ' . $e->getMessage();
	} 
}*/

session_start();
?>