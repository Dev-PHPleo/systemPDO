<?php

	// MYSQL
	/*$servername = "localhost"; 
	$database = "curso_estoque"; 
	$username = "root";
	$password = "";
	$conexao = mysqli_connect($servername, $username, $password, $database);*/
	

	// PDO
   	
	try 
		{
			$pdo = new PDO("mysql:dbname=curso_estoque;host=localhost", "root", "");
		}

	catch (PDOExcepetion $e) 
		{

		}

	catch (Exception $e) 
		{
		echo "Erro ao conectar ao BANCO DE DADOS:".$e->getMessage();
		}
?>








