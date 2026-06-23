<<<<<<< HEAD
# Sistema Escolar - CRUD Laravel

Projeto desenvolvido em Laravel para gerenciamento de uma escola, contendo cadastro e controle de usuários, alunos, professores e turmas.

## Sobre o projeto

O sistema permite realizar operações CRUD (Create, Read, Update, Delete) para as principais entidades:

- Usuários
- Alunos
- Professores
- Turmas

Foi desenvolvido utilizando Laravel com Blade, Bootstrap e banco de dados MySQL.

## Funcionalidades

### Usuários
- Cadastro de usuários
- Listagem de usuários
- Visualização de detalhes
- Edição de dados
- Exclusão de usuários
- Senhas armazenadas de forma criptografada

### Alunos
- Cadastro de alunos
- Edição de informações
- Visualização dos dados
- Exclusão de alunos
- Associação do aluno a uma turma

### Professores
- Cadastro de professores
- Listagem de professores
- Edição e remoção
- Relacionamento com turmas

### Turmas
- Cadastro de turmas
- Definição de sala e horário
- Associação com professor
- Visualização dos alunos pertencentes à turma

## Tecnologias utilizadas

- PHP
- Laravel
- MySQL
- Blade Templates
- Bootstrap
- Composer
- Git/GitHub

## Estrutura do projeto

```
app/
 ├── Http/
 │    └── Controllers/
 └── Models/

database/
 └── migrations/

resources/
 └── views/

routes/
 └── web.php
```

## Banco de dados

Principais tabelas:

- usuarios
- alunos
- professores
- turmas

Relacionamentos:

- Professor possui várias turmas
- Turma possui vários alunos
- Aluno pertence a uma turma

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

## Controle de versão

O projeto utiliza Git seguindo fluxo com branches:
=======
<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# CRUD Equipe - Elisa
>>>>>>> origin/aluno-Alyson


<<<<<<< HEAD
=======
Campos:
- id
- nome
>>>>>>> beb5549a22f22ab23a94c2d283ca9c0abd466ad1
>>>>>>> origin/aluno-Alyson
