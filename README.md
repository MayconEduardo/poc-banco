<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## API Banco
- API feita utilizando Laravel 7.30.4

### Serviços:

1. Verificar o saldo da conta;
2. Realizar depósito na conta;
3. Realizar saque na conta;

## Como usar

Baixar o repositório do github.

```bash
git clone https://github.com/MayconEduardo/poc-banco-backend.git
```

Entrar na pasta do projeto.
```bash
cd poc-banco-backend
```

Baixar as dependencias do projeto.
```bash
composer install
```

Criar arquivo de configurações do projeto.
```bash
cp .env.example .env
```

Gerar a chave da aplicação.
```bash
php artisan key:generate
```

Criar banco de dados Sqlite.
```bash
touch database/database.sqlite
```

Criar as tabelas no banco de dados.
```bash
php artisan migrate
```

Criar os registros de teste na tabela do banco de dados.
```bash
php artisan db:seed
```

Executar o projeto.
```bash
php artisan serve
```

### Endpoints

1. http://localhost:8000/api/conta/saldo/1 (Verificar o saldo da conta)
    - Endpoint do tipo GET
2. http://localhost:8000/api/conta/deposito/1 (Realizar depósito na conta)
    - Endpoint do tipo POST
    - {"valor": 10}
3. http://localhost:8000/api/conta/saque/1 (Realizar saque na conta)
    - Endpoint do tipo POST
    - {"valor": 10}

## Licença

Esse repositório está licenciado pela **MIT LICENSE**.