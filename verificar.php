<?php

  // Lê os usuários do arquivo users.txt
  $usuarios = file_get_contents('users.txt');
  $usuarios = json_decode($usuarios, true);
 
   // Obtém os dados do formulário
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  
  // Procura o usuário com o login e senha fornecidos
  foreach ($usuarios as $usuario) {
    if ($usuario['login'] === $login && $usuario['senha'] === $senha) {
  $papel = $usuario['papel'];
  // Redireciona o usuário para a página de sucesso
  header('Location: sucesso.php?login=' . urlencode($login) . '&papel=' . urlencode($papel));
  exit();
 }
}
  // Redireciona o usuário para a página de erro
  header('Location: erro.php');
  exit();

?>
