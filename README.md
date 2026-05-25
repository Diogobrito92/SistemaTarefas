# DB Solutions - Sistema de Tarefas com Laravel + API

Projeto Full Stack desenvolvido com Laravel, MySQL, Blade e JavaScript utilizando consumo de API REST.

O sistema permite cadastro de usuários, autenticação, gerenciamento de tarefas e integração frontend consumindo endpoints da API via Fetch API.

---

# Tecnologias Utilizadas

## Backend
- PHP 8.2
- Laravel 12
- MySQL

## Frontend
- Blade
- HTML5
- CSS3
- TailwindCSS
- JavaScript

## Ferramentas
- XAMPP
- Composer
- Vite
- Git/GitHub

---

# Funcionalidades

## Autenticação
- Cadastro de usuários
- Login
- Logout
- Atualização de perfil
- Atualização de senha

## Sistema de Tarefas
- Criar tarefas
- Editar tarefas
- Excluir tarefas
- Marcar tarefas como concluídas
- Separação de tarefas por usuário

## API REST
- Listagem de tarefas
- Cadastro via API
- Atualização via API
- Exclusão via API
- Retorno em JSON

## Frontend Consumindo API
- Requisições utilizando Fetch API
- Atualização dinâmica da interface
- CRUD sem reload completo da página

---

# Estrutura do Projeto

```bash
app/
├── Http/
│   ├── Controllers/
│   │   ├── TaskController.php
│   │   └── Api/
│   │       └── TaskApiController.php
│
resources/
├── views/
│   ├── tasks/
│   │   ├── index.blade.php
│   │   └── api.blade.php
│   ├── auth/
│   └── layouts/

routes/
├── web.php
└── api.php
```

---

# Rotas Web

| Método | Rota | Descrição |
|---|---|---|
| GET | / | Página inicial |
| GET | /dashboard | Dashboard |
| GET | /tarefas | Lista de tarefas |
| GET | /tarefas-api | Página consumindo API |

---

# Rotas da API

| Método | Endpoint | Descrição |
|---|---|---|
| GET | /api/tasks | Listar tarefas |
| POST | /api/tasks | Criar tarefa |
| PUT | /api/tasks/{id} | Atualizar tarefa |
| DELETE | /api/tasks/{id} | Excluir tarefa |

---

# Como Rodar o Projeto

## 1. Clonar repositório

```bash
git clone URL_DO_REPOSITORIO
```

---

## 2. Acessar pasta

```bash
cd agenciajr-db
```

---

## 3. Instalar dependências

```bash
composer install
```

```bash
npm install
```

---

## 4. Configurar .env

Copie o arquivo:

```bash
.env.example
```

para:

```bash
.env
```

Configure:

```env
DB_DATABASE=agenciajr_db
DB_USERNAME=root
DB_PASSWORD=
```

---

## 5. Gerar chave Laravel

```bash
php artisan key:generate
```

---

## 6. Rodar migrations

```bash
php artisan migrate
```

---

## 7. Rodar servidor

```bash
php artisan serve
```

---

## 8. Rodar Vite

```bash
npm run dev
```

---

# Conceitos Aplicados

- MVC
- CRUD
- API REST
- Middleware
- Autenticação
- Validação
- Relacionamento entre tabelas
- Consumo de API
- Frontend desacoplado
- Responsividade
- Organização de rotas

---

# Objetivo do Projeto

O objetivo deste projeto foi praticar conceitos Full Stack utilizando Laravel, desde autenticação e banco de dados até criação de APIs REST e consumo via JavaScript.

---

# Melhorias Futuras

- Upload de arquivos
- Dashboard analítico
- Dark mode
- Notificações
- Docker
- Deploy em produção
- Integração com IA

---

# Autor

Desenvolvido por Diogo Brito  
DB Solutions