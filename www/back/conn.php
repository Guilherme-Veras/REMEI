<?php
$iphost = "localhost"; //ip/host
$dbhost = "remei"; //databse
$userhost = "root"; //usuario
$passwordhost = "1_RUetmfepIR_8"; //senha

/*
$iphost = "localhost"; //ip/host
$dbhost = "remei"; //databse
$userhost = "root"; //usuario
$passwordhost = ""; //senha
*/
        
try {
	$conn = new PDO("mysql:host=".$iphost.";dbname=".$dbhost."", $userhost, $passwordhost); 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	if ($e->getCode() == '2002'){
        header("Location: erros/2");
	}else{
		echo 'ERRO NO BANCO DE DADOS: ' . $e->getMessage();
	} 
}

session_start();
?>