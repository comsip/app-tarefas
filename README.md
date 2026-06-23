# Sistema de Controle de Atividades

## Sobre o projeto

Sistema web desenvolvido para gerenciamento e controle de atividades, permitindo organizar projetos, equipes, usuários, tarefas e informações relacionadas ao acompanhamento das atividades.

A aplicação foi construída utilizando arquitetura MVC e um banco de dados relacional, aplicando conceitos de modelagem de dados, relacionamento entre entidades e desenvolvimento web.

O sistema permite o gerenciamento de projetos, categorias, equipes, usuários, atividades, comentários, histórico, notificações e relatórios.

---

## Funcionalidades

### Gerenciamento de projetos
- Cadastro e organização de projetos;
- Classificação por categorias;
- Associação de equipes aos projetos;
- Controle das informações gerais do projeto.

### Gerenciamento de atividades
- Cadastro de atividades;
- Definição de prioridades;
- Controle de status;
- Controle de prazos;
- Registro de datas de início e conclusão.

### Gerenciamento de usuários e equipes
- Cadastro de usuários;
- Organização de equipes;
- Associação entre usuários e equipes;
- Controle de responsáveis pelas atividades.

### Comunicação e acompanhamento
- Registro de comentários;
- Histórico de alterações;
- Sistema de notificações.

### Relatórios
O módulo de relatórios foi desenvolvido para apresentar informações organizadas do sistema, permitindo o acompanhamento dos dados cadastrados e auxiliando na análise das atividades, projetos e resultados.

---

## Modelagem do Banco de Dados

O banco de dados foi estruturado utilizando o modelo MER (Modelo Entidade-Relacionamento), definindo entidades, atributos e relacionamentos entre os dados.

Principais entidades:

- Categoria
- Projeto
- Equipe
- Usuário
- Atividade
- Prioridade
- Status
- Prazo
- Comentário
- Histórico
- Notificação
- Relatório

A modelagem contempla relacionamentos 1:N e N:N utilizando entidades associativas quando necessário.

---

## Tecnologias utilizadas

### Backend
- PHP
- Laravel

### Banco de dados
- MySQL

### Frontend
- HTML5
- CSS3
- Bootstrap
- JavaScript

### Ferramentas e conceitos aplicados
- MVC (Model-View-Controller)
- ORM Eloquent
- Migrations
- Rotas Laravel
- CRUD
- Relacionamentos entre entidades
- Modelagem MER

---

## Estrutura do projeto

```
app/
 ├── Models
 ├── Controllers

database/
 ├── migrations

resources/
 ├── views

routes/
 └── web.php
```

---

## Como executar o projeto

### Clone o repositório

```bash
git clone URL_DO_REPOSITORIO
```

### Instale as dependências

```bash
composer install
```

### Configure o ambiente

Copie o arquivo de configuração:

```bash
cp .env.example .env
```

Configure as informações do banco de dados no arquivo `.env`:

```env
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

### Gere a chave da aplicação

```bash
php artisan key:generate
```

### Execute as migrations

```bash
php artisan migrate
```

### Inicie o servidor

```bash
php artisan serve
```

A aplicação estará disponível em:

```
http://127.0.0.1:8000
```

---

## Objetivo do projeto

Aplicar conceitos de desenvolvimento de sistemas web, gerenciamento de dados e organização de informações, criando uma solução capaz de controlar atividades, equipes e projetos de forma estruturada.
