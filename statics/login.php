<?php
session_start();
include("conexao.php");

$user_email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$user_password = mysqli_real_escape_string($conexao, trim(md5($_POST['password'])));

$sql = "SELECT * FROM usuarios WHERE email = '$user_email' AND password = '$user_password'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);

if ($count == 1) {
    // As credenciais são válidas, o usuário está autenticado
    $_SESSION['usuario_id'] = $row['id']; // Salvar o ID do usuário na sessão, se necessário
    $_SESSION['usuario_nome'] = $row['name']; // Salvar o nome do usuário na sessão, se necessário

    header('Location: onlogin.html'); // Redirecionar para a página do painel do usuário
    exit;
} else {
    $_SESSION['login_invalido'] = true; // Credenciais inválidas
    header('Location: offlogin.html'); // Redirecionar de volta para a página de login
    exit;
}

$conexao->close();
?>
