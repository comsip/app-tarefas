<<<<<<< HEAD
# Sistema Escolar - CRUD Laravel
=======
<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
>>>>>>> origin/aluno-celso

Projeto desenvolvido em Laravel para gerenciamento de uma escola, contendo cadastro e controle de usuários, alunos, professores e turmas.

## Sobre o projeto

O sistema permite realizar operações CRUD (Create, Read, Update, Delete) para as principais entidades:

-   Usuários
-   Alunos
-   Professores
-   Turmas

Foi desenvolvido utilizando Laravel com Blade, Bootstrap e banco de dados MySQL.

## Funcionalidades

### Usuários

-   Cadastro de usuários
-   Listagem de usuários
-   Visualização de detalhes
-   Edição de dados
-   Exclusão de usuários
-   Senhas armazenadas de forma criptografada

### Alunos

-   Cadastro de alunos
-   Edição de informações
-   Visualização dos dados
-   Exclusão de alunos
-   Associação do aluno a uma turma

### Professores

-   Cadastro de professores
-   Listagem de professores
-   Edição e remoção
-   Relacionamento com turmas

### Turmas

-   Cadastro de turmas
-   Definição de sala e horário
-   Associação com professor
-   Visualização dos alunos pertencentes à turma

## Tecnologias utilizadas

-   PHP
-   Laravel
-   MySQL
-   Blade Templates
-   Bootstrap
-   Composer
-   Git/GitHub

## Estrutura do projeto

```
app/
 ├── Http/
 │    └── Controllers/
 └── Models/

database/
 └── migrations/

<<<<<<< HEAD
resources/
 └── views/
=======
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
## Sistema de Controle de Atividades — Integração com Git
>>>>>>> origin/aluno-celso

routes/
 └── web.php
```

## Banco de dados

Principais tabelas:

-   usuarios
-   alunos
-   professores
-   turmas

Relacionamentos:

-   Professor possui várias turmas
-   Turma possui vários alunos
-   Aluno pertence a uma turma

## Como executar o projeto

### 1. Clonar o repositório

```bash
git clone URL_DO_REPOSITORIO
```

### 2. Entrar na pasta

```bash
cd app-tarefas
```

### 3. Instalar dependências

```bash
composer install
```

### 4. Criar arquivo de ambiente

```bash
copy .env.example .env
```

### 5. Gerar chave Laravel

```bash
php artisan key:generate
```

### 6. Configurar banco no `.env`

Exemplo:

```
DB_DATABASE=nome_banco
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Rodar migrations

```bash
php artisan migrate
```

### 8. Iniciar servidor

```bash
php artisan serve
```

Acesse:

```
http://127.0.0.1:8000
```
<<<<<<< HEAD

## Controle de versão

O projeto utiliza Git seguindo fluxo com branches:
=======
>>>>>>> 33032d2fedee035c238edd082c4ff62a0d10ecf2
>>>>>>> origin/aluno-celso
