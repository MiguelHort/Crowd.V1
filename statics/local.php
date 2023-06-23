<?php
session_start();

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'root');
define('DB', 'cadastro');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

$user_comments = mysqli_real_escape_string($conexao, trim($_POST['comments']));
$user_stars = mysqli_real_escape_string($conexao, trim($_POST['stars']));

error_log($user_stars);


$sql = "INSERT INTO avaliacao (comments, stars) VALUES ('$user_comments', '$user_stars')";

if ($conexao->query($sql) === TRUE) {
    $_SESSION['avaliacao_enviada'] = true;
}

$conexao->close();

header('Location: index.html');
exit;
?>

