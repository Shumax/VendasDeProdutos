<?php

namespace Buy\Controllers;

use Buy\Dao\Manipulation;

class ProdutosControl implements ProdutosInterface
{
	public function insertProdutos($tabela, $array): string
	{
		$in = (new Manipulation)->insertData($tabela, $array);
		return $in;
	}

	public function listProdutos(): array
	{
		return [];
	}

	public function changeProdutos(): string
	{
		return "";
	}

	public function deleteProdutos(): string
	{
		return "";
	}
}