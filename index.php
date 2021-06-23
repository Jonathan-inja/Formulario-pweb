<?php
  session_start();

  $nome = $_REQUEST['nome'];
  $telefone = $_REQUEST['telefone'];

  $_SESSION["Nome"]=$nome;
  $_SESSION["Telefone"]=$telefone;

    echo '<a href="mostradados.php">Ver dados</a>'
?>