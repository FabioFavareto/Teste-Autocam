<?php

if (empty($_POST["name"])){
    die("Nome é obrigatório!");
}


if (empty($_POST["tell"])){
    die("Telefone é obrigatório!");
}



$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO requisitos (name,cpf, tell, nomemaquina, numserie, anofab, titulomanut,  descmanut, usuariomanut)
                    VALUES  ('$_POST[name]', '$_POST[cpf]' , '$_POST[tell]' ,'$_POST[nomemaquina]', '$_POST[numserie]', '$_POST[anofab]','$_POST[titulomanut]','$_POST[descmanut]','$_POST[usuariomanut]')";
;

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)){
    die("SQL error: " . $mysqli->error);
}


$stmt->execute();

echo "Enviado com Sucesso!";

print_r($_POST);