<?php
session_start();
include("conexao.php");

$user_name = mysqli_real_escape_string($conexao, trim($_POST['name']));
$user_email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$user_password = mysqli_real_escape_string($conexao, trim(md5($_POST['password'])));

$sql = "select count(*) as total from usuarios where email = '$user_email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: index.html');
	exit;
}

$sql = "INSERT INTO usuarios (name,email,password) VALUES ('$user_name', '$user_email', '$user_password')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: index.html');
exit;
?>
