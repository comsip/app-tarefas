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
