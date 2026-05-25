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

---

# Prints do Sistema

## Página Inicial
<img width="1919" height="871" alt="Tela inicial" src="https://github.com/user-attachments/assets/247c0855-58f4-4159-8b5a-5a0eb25bee34" />

---
## Login
<img width="1904" height="848" alt="Tela de login" src="https://github.com/user-attachments/assets/4e2b9906-63aa-4030-8a94-2092539470dc" />

---
## Cadastro
<img width="1919" height="866" alt="Tela de cadastro" src="https://github.com/user-attachments/assets/3d6bf07a-4274-4b26-b2ee-53f460943e38" />

---
## Dashboard
<img width="1900" height="863" alt="Dashboard" src="https://github.com/user-attachments/assets/5bc4f926-d784-43d6-b78b-ceb9633bbe83" />

---
## Perfil
<img width="1913" height="862" alt="Pagina perfil" src="https://github.com/user-attachments/assets/0aa0e1fc-2507-4d16-91fe-6739c813c6e1" />

---
## Tarefas
<img width="1913" height="864" alt="Pagina de tarefas" src="https://github.com/user-attachments/assets/998fe558-1b3d-4d75-be69-61260d4178b9" />

---
## Tarefas API
<img width="1918" height="865" alt="Pagina de tarefas API" src="https://github.com/user-attachments/assets/dc0c7f4e-3576-4758-ba6d-a6da3fb9052f" />

---
# Autor

Desenvolvido por Diogo Brito  
DB Solutions
