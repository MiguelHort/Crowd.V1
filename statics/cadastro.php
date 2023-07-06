<?php
session_start();
include("conexao.php");

// Recebe os valores
$user_name = mysqli_real_escape_string($conexao, trim($_POST['name']));
$user_email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$user_password = mysqli_real_escape_string($conexao, trim(md5($_POST['password'])));

// Valida o email
$sql = "select count(*) as total from usuarios where email = '$user_email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

// Valida o usuario como já existente
if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: index.html');
	exit;
}

// Insere os valores no banco
$sql = "INSERT INTO usuarios (name,email,password) VALUES ('$user_name', '$user_email', '$user_password')";

// Executa se for verdadeiro
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	$conexao->close();

	header('Location: index.html');
}


exit;
?>