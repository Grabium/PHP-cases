# Projetos com puro PHP

## Roteamento das requisições para cada servidor:

### Replit (Usando o Servidor Embutido do PHP)

Em caso de uso do php puro e sem framework o Replit faz seu roteamento de acordo com o arquivo oculto *`.replit`*.
Na linha `run = "php -S 0.0.0.0:8000 -t ."`, o ` . ` (ponto) é um argumento do programa 'php' e indica o local. 
Altere o documento para que ele impeça o acesso aos recuros pela uri, mas permita através de um roteamento. Assim:

```python
#ambiente de testes (Replit)
run = "php -S 0.0.0.0:8000 -t public public/index.php"

#...Outras cláusulas...

#Ambiente de produção.
run = ["php", "-S", "0.0.0.0:8000", "-t", "public", "public/index.php"]
```

você está instruindo o servidor PHP embutido a:
    
- Iniciar o servidor na porta 8000.

- Usar o diretório public como a raiz dos documentos.

- Usar o arquivo index.php como o arquivo de roteamento.

O servidor PHP irá processar qualquer requisição que não seja para um arquivo estático (como um arquivo .css, .js, ou uma imagem) e passá-la para o index.php. O seu framework de roteamento dentro do index.php se encarrega de analisar a URL (/perfil/123, por exemplo) e carregar a lógica correta da sua aplicação.