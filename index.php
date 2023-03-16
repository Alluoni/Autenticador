<!DOCTYPE html>
<html>
<head>
<style>

th{
 border: 1px solid black;
}
td{
 border: 1px solid black;
}
.formulario{
  border: 1px solid black;
  display: flex;
  flex-direction: column;
  align-items: center;
}
button{
  margin: 20px;
}


</style>
  <title>Página de login</title>
</head>
<body>
  <section class="content">
    <div>
      <div class="dados">
        <?php
          $json = file_get_contents('users.txt');
          $usuarios = json_decode($json);

          echo "<table>";
          echo "<tr><th>Users</th><th>Senhas</th><th>Cargos</th></tr>";

          foreach ($usuarios as $usuario) {
            echo "<tr>";
            echo "<td>" . $usuario->login . "</td>";
             echo "<td>" . $usuario->senha . "</td>";
              echo "<td>" . $usuario->papel . "</td>";
            echo "</tr>";
          }

          echo "</table>";
        ?>
      </div>
    </div>
    <form class="formulario" action="verificar.php" method="post">
      <h1>LOGIN</h1>
      <div>
        <label for="login">Login:</label>
        <input type="text" id="login" name="login">
      </div>
      <div>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">
      </div>
      <div>
        <button type="submit">Entrar</button>
      </div>
    </form>
  </section>
  <script src="script.js"></script>
</body>
</html>
