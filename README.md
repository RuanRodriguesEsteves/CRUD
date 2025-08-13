# Projeto CRUD – Instalações Escolares

## 💡 Descrição

Aplicação fullstack para gerenciamento de instalações escolares, com upload de CSV e CRUD completo.
Backend em **Laravel 12** e frontend usando **Blade com Bootstrap 5**.

## 🚀 Tecnologias

* **Backend:** PHP 8.4.6 + Laravel 12
* **Frontend:** Blade + Bootstrap 5
* **Banco de Dados:** PostgreSQL
* **Autenticação:** Laravel Breeze (login/logout)

## 🛠 Como Executar

### Clone o repositório

git clone [https://github.com/RuanRodriguesEsteves/CRUD.git](https://github.com/RuanRodriguesEsteves/CRUD.git)

cd projeto-crud

### Backend

composer install  
cp .env.example .env  
php artisan key\:generate  

Configure o banco de dados no `.env`:  
DB\_CONNECTION=pgsql  
DB\_HOST=127.0.0.1  
DB\_PORT=5432  
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

## ⚙️ Configuração do PHP

Antes de rodar o projeto, verifique se o arquivo `php.ini` está configurado corretamente.  
Edite o `php.ini` e ative/extensões necessárias:

- Remova o `;` (ponto e vírgula) antes das linhas abaixo:  
extension=fileinfo  
extension=mbstring  
extension=pdo_mysql  

- Ajuste o limite de upload para arquivos CSV maiores:  
upload_max_filesize = 10M  
post_max_size = 12M  

- Certifique-se de que a timezone está definida:  
date.timezone = America/Sao_Paulo

Após salvar as alterações, **reinicie o servidor PHP** ou o serviço que estiver usando (Apache/Nginx).  

## 📌 Funcionalidades

* Tela de login e registro (registro opcional, apenas login em produção)
* Dashboard protegido (somente usuários logados)
* CRUD completo de Instalações Físicas
* Upload de CSV com importação de dados
* Visualização de registros em tabela

## 🔐 Usuário de teste

* **Login:** [admin@teste.com](mailto:admin@teste.com)
* **Senha:** 12345678

> Obs.: Este usuário é criado automaticamente pelo seeder no `DatabaseSeeder`.
