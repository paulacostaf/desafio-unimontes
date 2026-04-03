# Desafio Técnico — Gerenciamento de Usuários e Tarefas

Este projeto foi desenvolvido em Laravel como parte de um desafio técnico,
com o objetivo de criar uma aplicação simples para gerenciamento de usuários e tarefas.

## Requisitos

- PHP 8.3+
- Composer
- Node.js e NPM
- MySQL

## Instalação

1. Clone o repositório:

```bash
git clone https://github.com/paulacostaf/desafio-unimontes.git
cd desafio-unimontes
```

2. Configure o ambiente:

```bash
cp .env.example .env
```

3. Edite o arquivo `.env` com as credenciais do banco de dados:

```env
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

4. Execute o comando de instalação:

```bash
composer run setup
```

Esse comando instala as dependências do projeto, gera a chave da aplicação,
executa as migrations e compila os arquivos necessários.

## Execução do projeto

```bash
composer run dev
```

Após isso, a aplicação poderá ser acessada no navegador.

## Funcionalidades

- Cadastro de usuários
- Autenticação
- Cadastro de tarefas
- Edição e exclusão de tarefas
- Marcação de tarefas como concluídas
- Listagem de tarefas por usuário

## Observação

A interface foi desenvolvida de forma simples, conforme proposto no desafio,
com foco principal no funcionamento da aplicação.