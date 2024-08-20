<?php
return [

'paths' => ['api/*'],

'allowed_methods' => ['*'], // ou especifique métodos específicos como ['GET', 'POST', 'PUT', 'DELETE']

'allowed_origins' => ['http://localhost:3000'], // Adicione a URL do frontend React

'allowed_origins_patterns' => [],

'allowed_headers' => ['*'], // ou especifique cabeçalhos específicos

'exposed_headers' => [],

'max_age' => 0,

'supports_credentials' => true, // Permite o envio de credenciais

];
