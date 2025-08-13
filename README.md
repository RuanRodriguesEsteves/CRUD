# Projeto CRUD – Instalações Escolares

## 💡 Descrição

Aplicação fullstack para gerenciamento de instalações escolares, com upload de CSV e CRUD completo.
Backend em **Laravel 12** e frontend usando **Blade com Bootstrap 5**.

## 🚀 Tecnologias

* **Backend:** PHP 8.x + Laravel 12
* **Frontend:** Blade + Bootstrap 5
* **Banco de Dados:** MySQL ou MariaDB
* **Autenticação:** Laravel Breeze (login/logout)

## 🛠 Como Executar

### Clone o repositório

git clone [https://github.com/seuusuario/projeto-crud.git](https://github.com/seuusuario/projeto-crud.git)
cd projeto-crud

### Backend

composer install
cp .env.example .env
php artisan key\:generate

Configure o banco de dados no `.env`:
DB\_CONNECTION=mysql
DB\_HOST=127.0.0.1
DB\_PORT=3306
DB\_DATABASE=nome\_do\_banco
DB\_USERNAME=usuario
DB\_PASSWORD=senha

Migrations e seeders:
php artisan migrate --seed

Servidor local:
php artisan serve

### Frontend

npm install
npm run dev

## 📌 Funcionalidades

* Tela de login e registro (registro opcional, apenas login em produção)
* Dashboard protegido (somente usuários logados)
* CRUD completo de Instalações Físicas
* Upload de CSV com importação de dados
* Visualização de registros em tabela

## 🔐 Usuário de teste

* **Login:** [admin@teste.com](mailto:admin@teste.com)
* **Senha:** 123456

> Obs.: Este usuário é criado automaticamente pelo seeder no `DatabaseSeeder`.

## 📄 Licença

MIT
