<?php

require_once 'conecta_bd.php';

$nome = isset($_POST["nome"]) ? $_POST["nome"] : null;
$sobrenome = isset($_POST["sobrenome"]) ? $_POST["sobrenome"] : null;
$participacao = intval(isset($_POST["participacao"]) ? $_POST["participacao"] : null);

$stmt = $conn->prepare("INSERT INTO usuario (nome, sobrenome, participacao) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $nome, $sobrenome, $participacao);

if($stmt->execute()){
  header("Location: ../index.php");
}else{
  $stmt->error;
}