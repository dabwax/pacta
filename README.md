# BBlender - Cliente: Pacta

## Descrição

Este projeto foi inicializado utilizando o seguinte comando:
`php composer.phar create-project --prefer-dist cakephp/app pacta`

Todas as suas dependências de back-end são instaladas através do Composer.
Todas as suas dependências de front-end são instaladas através do Bower (Grunt).

Todos os assets (CSS, JS, IMG) são manipulados e minificados através do Grunt.

## Instalação

Você precisará de:

1. composer
2. node.jS (para rodar o grunt)
3. grunt e grunt-cli


Após clonar o projeto, acesse a pasta do mesmo via terminal e rode:
`npm install`

Isto instalará todas as dependências de front-end (grunt, bower, etc) na pasta node_modules.

Observação importante: As dependências do Composer já estão incluídas no repositório, sendo assim não é necessário rodá-lo após clonar.