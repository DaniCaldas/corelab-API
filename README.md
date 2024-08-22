# Laravel API
## Tecnologias
- PHP
- Laravel
- MySQL
  
## Como usar
    git clone https://github.com/DaniCaldas/corelab-API.git
    cd corelab-API
    composer install
    php artisan migrate
    php artisan serve

para utilizar o projeto sera preciso utilizar um banco de dados local, recomendado utilizar o xampp para esses serviços.

## Banco de dados
## O banco de dados esta utilizando as configuração padrão:
- user: root
- senha:
- database: list
- tabela: tarefas

## Estrutura da tabela
<code>id integer primary key,
titulo varchar(255),
status varchar(255) default("Pendente"),
favorito integer default(1), # 1 é para não favoritado e 2 para favoritado
cor varchar(255) default("#FFFFF")
</code>
