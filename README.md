<<<<<<< HEAD
## Sistema de Controle de Atividades — Integração com Git

Repositório oficial da turma:
https://github.com/comsip/app-tarefas.git

---

# Contexto da Atividade

Cada aluno já possui localmente um projeto Laravel 8 com sua entidade e CRUD implementado.

Agora será feita a integração desses projetos individuais ao repositório remoto oficial da turma.

---

# Regras Gerais

-   Não utilizar a branch `main` diretamente
-   Não sobrescrever código de outros alunos
-   Não excluir arquivos do projeto base
-   Cada aluno deve trabalhar em uma branch própria
-   Cada aluno deve enviar apenas sua implementação
-   O envio será feito via Pull Request

---

# 1. Abrir o projeto local

Abra o terminal dentro da pasta do seu projeto:

```bash
cd caminho/do/seu-projeto
```

Exemplo (Windows):

```bash
cd C:\xampp\htdocs\meu-projeto
```

---

# 2. Verificar ou inicializar Git

Verifique se já existe Git no projeto:

```bash
git status
```

Se não for um repositório Git:

```bash
git init
```

---

# 3. Conectar ao repositório remoto

Adicionar o repositório oficial da turma:

```bash
git remote add origin https://github.com/comsip/app-tarefas.git
```

Verificar se foi adicionado corretamente:

```bash
git remote -v
```

---

# 4. Primeiro commit do projeto local

Adicionar todos os arquivos:

```bash
git add .
```

Criar o commit inicial:

```bash
git commit -m "chore: projeto inicial do aluno com CRUD"
```

---

# 5. Criar branch individual (OBRIGATÓRIO)

Cada aluno deve criar sua própria branch:

```bash
git checkout -b aluno-nome
```

Exemplos:

```bash
git checkout -b aluno-elizangela
git checkout -b aluno-murilo
git checkout -b aluno-rodrigo
```

---

# 6. Enviar projeto para o GitHub

Enviar a branch criada:

```bash
git push -u origin aluno-nome
```

Exemplo:

```bash
git push -u origin aluno-elizangela
```

---

# 7. Criar Pull Request

No GitHub:

1. Acesse o repositório da turma
2. Clique em **Compare & pull request**
3. Base: `main`
4. Compare: sua branch
5. Criar Pull Request
6. Título: `CRUD - Nome do Aluno - Entidade`

---

# Problemas comuns

## Erro: "remote already exists"

```bash
git remote set-url origin https://github.com/comsip/app-tarefas.git
```

---

## Erro: "repository not found"

Verificar:

-   URL correta do repositório
-   Permissão de acesso ao GitHub
-   Login correto na conta Git

---

## Erro: "fetch first / rejected push"

Executar:

```bash
git pull origin main --allow-unrelated-histories
```

Depois:

```bash
git add .
git commit -m "merge inicial com repositório base"
git push -u origin aluno-nome
```

---

## Erro: "permission denied (403)"

-   Usuário não tem permissão no repositório
-   Git está logado em conta errada
-   Necessário login correto no GitHub

---

# Fluxo completo simplificado

```text
Projeto local → Git init → Remote → Commit → Branch → Push → Pull Request
```

---

# Objetivo final

Cada aluno deve integrar seu CRUD individual ao sistema coletivo através de Pull Requests no repositório oficial da turma.

```

```
=======
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
>>>>>>> origin/aluno-murilo
