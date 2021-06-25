<?php
  session_start();

  $nome = $_REQUEST['nome'];
  $idade = $_REQUEST['idade'];
  $telefone = $_REQUEST['telefone'];
  $email = $_REQUEST['email'];

  $_SESSION["Nome"]=$nome;
  $_SESSION["idade"]=$idade;
  $_SESSION["Telefone"]=$telefone;
  $_SESSION["email"]=$email;

    echo '<a href="mostradados.php">Ver dados</a>'
?>