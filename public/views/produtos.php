<?php
/*
use Buy\Controllers\ProdutosControl;

require "../../vendor/autoload.php";
require "../../src/Models/Produtos.php";
require "../../src/Controllers/ProdutosControl.php";

//$nome = isset($_POST["nome"])?$_POST["nome"]:"[Nome não informado!]";
//$preco = isset($_POST["preco"])?$_POST["preco"]:"[Preço não informado!]";

$cadastra = new ProdutosControl;

$produto = array(
    "nome" => $nome,
    "preco" => $preco
);

$cadastra->insertProdutos('produtos', $produto);
*/
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_SPECIAL_CHARS);

echo json_encode($nome);
echo json_encode($preco);

echo json_encode('oi');
