<?php 
include("back/conn.php");//Inicia as conecoes com o banco e starta a session
include("back/pages.php");//Defini as variaveis da pagina
						  //$URL->vetor com a url separada por /
						  //$paginaVar pagina com final .php
						  //$paginaAtual nome da pagina com inicial em maiuscula
include("back/funcsPHP.php");//Chama as funcoes de PHP
include("back/funcsJS.php");//Chama as funcoes de JavaScript
include("layout/head.php");
include("layout/header.php");
include("backPaginas/".$paginaVar);
include("paginas/".$paginaVar);
include("layout/footer.php");
?>