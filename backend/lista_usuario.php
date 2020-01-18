<?php

require_once 'conecta_bd.php';

$stmt = $conn->prepare("SELECT id, nome, sobrenome, participacao FROM usuario ORDER BY id ASC");
$stmt->execute();
$stmt->bind_result($id, $nome, $sobrenome, $participacao);

$arrayUsuario = array();

while ($stmt->fetch()) {
  $itemArrayUsuario = array(
    "id" => $id,
    "nome" => $nome,
    "sobrenome" => $sobrenome,
    "participacao" => $participacao
  );

  array_push($arrayUsuario, $itemArrayUsuario);
}

echo json_encode($arrayUsuario);  
