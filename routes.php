<?php

require "./vendor/autoload.php";

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('teste-isportistics/usuario', function() {
    require_once 'backend/api.php';
    $API = new API;
    header("Content-Type: application/json");
    echo $API->Select($conn);
});

Router::post('/teste-isportistics/criarUsuario', function() {
  $body = file_get_contents('php://input');
  $obj = json_decode($body);

  require_once 'backend/api.php';
  $API = new API;
  echo $API->Insert($conn, $obj);
});

Router::get('/teste-isportistics', function() {
    require_once 'index.php';
});

Router::get('/', function() {
    require_once 'index.php';
});

Router::get('', function() {
    require_once 'index.php';
});

Router::start();