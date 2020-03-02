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

	public function listProdutos($tabela, $where, $campos): array
	{
		$list = (new Manipulation)->listData($tabela, $where, $campos);
		return $list;
	}

	public function changeProdutos($tabela, $array, $where): string
	{
		$change = (new Manipulation)->changeData($tabela, $array, $where);
		return $change;
	}

	public function deleteProdutos($tabela, $where): string
	{
		$delete = (new Manipulation)->deleteData($tabela, $where);
		return $delete;
	}
}