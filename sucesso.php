<!DOCTYPE html>
<html>
<head>
  <style>
    h1{
     text-align: center;
    }
    p{
     text-align: center;
    }
  </style>
  <title>Login</title>
</head>
<body>
  <div class="nav"> 
  <a class="link1" href="index.php">Voltar</a>
  </div>
  <div class="content">
    <div class="bloco1"> 
  <?php if (isset($_GET['login'])): ?>
    <h1>Olá <?php echo $_GET['login']; ?>!</h1>
    <p>Sua autenticação foi um sucesso.</p>
  <?php else: ?>
    <p>Ocorreu um erro ao processar sua solicitação.</p>
  <?php endif; ?>
</div>
  </div>
</body>
</html>
