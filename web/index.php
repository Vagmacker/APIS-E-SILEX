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
      $array = [
          'nome'=> 'Joao',
          'email'=> 'email@exemplo.com',
          'CPF'=> '000.000.000-00'
      ];

      return $app->json($array);
});

$app->run();

?>