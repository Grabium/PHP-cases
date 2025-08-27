# Projetos com puro PHP

Comecei com os seguintes comandos no shell:

```bash
composer init
```
Atualmente (em 2025), este comando já inclui os efeitos do comando `composer dump-autoload`, que seria necessário para criar o _composer.json_.
Após algumas configurações, eis o arquivo JSON:

```json
{
    "name": "puro_php/puro_php",
    "description": "Apenas para testes e aprendizado sobre o php e seu ambiente de funcionamento.",
    "autoload": {
        "psr-4": {
            "PuroPhp\\PuroPhp\\": "src/"
        }
    },
    "authors": [
        {
            "name": "Gabriel Azzevedo",
            "email": "<hash>+<nome_no_github>@users.noreply.github.com"
        }
    ],
    "require": {}
}
```
Note que preenchi interativamente (via CLI), embora não seja obrigatório, os campos:
- nome;
- descrição;
- psr4: [y];

Mas neste momento em que você está lendo, este arquivo já se encontra diferente.

Criei o _./index.php_.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

new \App\Controllers\MainController;
```

E chamei o comando para que o composer instalasse as dependências e atualizasse qualquer alteração para que o projeto fique de acordo com o _composer.json_:

```
composer install
```

Este gerou o _composer.lock_. Este comando lê o _composer.json_, executa a instalação das depedências e dependências de dependências solicitadas e registra a versão de cada uma no _composer.lock_.

**ATENÇÃO!**

A cada alteração feita no _composer.json_, para que entre em vigor, use `composer install` em seguida.

