<?php

require_once __DIR__.'/../bootstrap.php';

use SON\Sistema\Service\ClienteService;

$app->get('/exemplo', function() use($app){

      $dados['nome'] = "Cliente";
      $dados['email'] = "email@cliente.com";

      $ClienteService = new ClienteService();
      $result = $ClienteService->insert($dados);

      return $app->json($result);

});

$app->get('/clientes', function() use($app){
      $array = array(
          'nome'=> 'Joao',
          'email'=> 'email@exemplo.com',
          'CPF'=> '000.000.000-00'
      );

      return $app->json($array);
});

//Rota da fase 1
//$app->mount('/clientes', include 'Fase1.php');

$app->run();

?>