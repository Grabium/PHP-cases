<?php

require __DIR__ . '/../vendor/autoload.php';

new \App\Controllers\MainController;

// Agora você pode instanciar suas classes sem precisar de 'require'.
// Exemplo:
// $meuObjeto = new MeuProjeto\MinhaClasse();