<?php
include("conexao.php");

$user_nomengc = $_POST['nomengc'];
$user_descricao = $_POST['descricao'];
$user_cep = $_POST['cep'];
$user_telefone = $_POST['telefone'];
$user_email = $_POST['email'];
$user_site = $_POST['site'];
$user_picture__input = $_FILES['picture__input'];

if (isset($_POST['submit']) && isset($_FILES['picture__input'])) {
    $caminho = '/statis/fotosrecebidas/';
    $novonome = uniqid() . '_' . time() . '.jpg';
    $caminhocompleto = $caminho . $novonome;

    if (move_uploaded_file($_FILES['picture__input']['tmp_name'], $caminhocompleto)) {
        $sql = mysqli_prepare($conexao, "INSERT INTO novolocal (nomengc, descricao, cep, telefone, email, site, caminhoimagem) VALUES ('$user_nomengc', '$user_descricao', '$user_cep', '$user_telefone', '$user_email', '$user_site', '$caminhocompleto')");
        $executar = mysqli_stmt_execute($sql);
    }
}
?>
