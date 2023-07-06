<?php
// Definição das constantes de conexão com o banco de dados
define('HOST', 'sql105.infinityfree.com');
define('USUARIO', 'if0_34441522');
define('SENHA', 't45KwRmQJ1cX3');
define('DB', 'if0_34441522_cadastro');
 
// Conexão com o banco de dados utilizando as constantes definidas
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>
