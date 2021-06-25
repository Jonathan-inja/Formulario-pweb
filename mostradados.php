<?php
    session_start();
    echo "Nome: ".$_SESSION["Nome"]."<br>";
    echo "idade: ".$_SESSION["idade"]."<br>";
    echo "Telefone: ".$_SESSION["Telefone"]."<br>";
    echo "email: ".$_SESSION["email"]."<br>";
?>