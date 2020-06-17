<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Projeto sistema Gestão loja de tintas

## Passos para configurar um projeto do Laravel do Github.com

## 1. cd em seu projeto Terminal, Você precisará estar dentro desse arquivo de projeto para inserir todo o restante dos comandos.

Na pasta Servidor XAMPP Control:

cd C:\Xampp\htdocs

## 2. Instale dependências do composer Terminal:

composer install

## 3. Instale dependências do npm:

npm install

## 4. Crie um banco de dados vazio:
http://localhost/phpmyadmin

CREATE DATABASE db_swtintas;

## 5. Migrar o banco de dados:

Depois que suas credenciais estiverem no arquivo .env, agora você poderá migrar seu banco de dados.

Terminal:

artesão php migrar


<hr>

## Atenção ao commit

Não dar commit nas seguintes pastas:

"vendor"

"node_modules"
