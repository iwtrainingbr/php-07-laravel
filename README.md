## API

### Passo a passo

- Clone o repositorio
`git clone https://github.com/iwtrainingbr/php-07-laravel`

- Entre dentro da pasta
`cd php-07-laravel`

- Instale as dependencias
`composer install`

### Passo a passo (do zero)

Pra criar o projeto em laravel
`composer create-project laravel/laravel meuProjeto`

`cd meuProjeto`

- Crie o controller
- Crie o model
- gere a migration
- crie as rotas

Pra criar uma nova migration

`php artisan make:migration nome_da_migration --create=nome_tabela`

Pra executar as migrations

`php artisan migrate`


Pra subir o servidor
`php -S localhost:8000 -t public`