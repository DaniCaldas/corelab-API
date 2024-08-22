# Laravel API
## Tecnologias
- PHP
- Laravel
- MySQL
  
## Como usar
- Primeiramente é preciso clonar o projeto
- para iniciar a api é preciso rodar <code>php artisan serve</code> no terminal do projeto
- após isso é só testar as rotas e o projeto ja estara funcionando

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
