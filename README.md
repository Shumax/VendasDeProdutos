# SISTEMA DE GERENCIMENTO PARA UMA EMPRESA	

O sistema deve ter obrigatoriamente: 

- Tela para gerenciamento (CRUD) dos PRODUTOS.

- Tela para gerenciamento (CRUD) dos VENDEDORES.

- Tela para gerenciamento (CRUD) das VENDAS.

- Tela para visualização dos relatórios das vendas. Nesse item você escolhe que tipo de informação/formato vai disponibilizar para análise nos relatórios.

## Estrutura

- Telas - public/
		- views/
    - Index - index.html
- Aplicação - src/
    - Controllers - controles do sistema
    - Dao - acesso a dados do sistema
    - Models - objetos do sistema para proximas melhorias

## Requisitos

Para instalar você precisará

- PHP 7.3
- Composer
- MySql 5.7	

## Para instalar as dependências

Para instalar as dependências do projeto execute:

	composer init

## Para configurar o banco de dados

Você precisa criar um banco Mysql com as seguintes tabelas:

- produtos
	- id int PK
	- nome varchar
	- preco double
- vendedores
	- id int PK
	- nome varchar
- venda
	- id int
	- criado_em date
	- valor double
	- idProdutos int FK
	- idVendedores int FK

Atente-se às configuções de caminho do seu banco em src/Dao/Manipulation.php
