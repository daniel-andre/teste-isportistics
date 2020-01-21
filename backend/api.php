<?php

require_once __DIR__ . '/conecta_bd.php';

class API{
  function Select($conn){
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
    return json_encode($arrayUsuario);
  }
  function Insert($conn, $obj){
    $nome = $obj->{nome};
    $sobrenome = $obj->{sobrenome};
    $participacao = $obj->{participacao};

    $stmt = $conn->prepare("INSERT INTO usuario (nome, sobrenome, participacao) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $nome, $sobrenome, $participacao);

    if($stmt->execute()){
      header("Location: ../index.php");
    }else{
      $stmt->error;
    }
  }
}