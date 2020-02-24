<?php

use Buy\Controllers\ProdutosControl;

require "../../vendor/autoload.php";
require "../../src/Models/Produtos.php";
require "../../src/Controllers/ProdutosControl.php";

$nome = isset($_POST["nome"])?$_POST["nome"]:"[Nome não informado!]";
$preco = isset($_POST["preco"])?$_POST["preco"]:"[Preço não informado!]";

$cadastra = new ProdutosControl;

$produto = array(
    "nome" => $nome,
    "preco" => $preco
);

$cadastra->insertProdutos('produtos', $produto);

