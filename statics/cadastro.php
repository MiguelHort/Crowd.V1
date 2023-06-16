<?php
session_start();
include("conexao.php")

$name = mysqli_real_escape_string($conexao, trim($_POST['name']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$password = mysqli_real_escape_string($conexao, trim(md5($_POST['password'])));

$sql = "select count(*) as total from usuario where usuario = '$usuarios'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO usuarios (name, email, password, data_cadastro) VALUES ('$name', '$email', '$password', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>