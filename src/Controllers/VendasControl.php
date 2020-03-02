<?php

namespace Buy\Controllers;

use Buy\Dao\Manipulation;

class VendasControl implements VendasInterface
{
	public function insertVendas($tabela, $array): string
	{
		$in = (new Manipulation)->insertData($tabela, $array);
		return $in;
	}

	public function listVendas(): array
	{
		$list = (new Manipulation)->listData($tabela, $where, $campos);
		return $list;
	}

	public function changeVendas(): string
	{
		$change = (new Manipulation)->changeData($tabela, $array, $where);
		return $change;
	}

	public function deleteVendas(): string
	{
		$delete = (new Manipulation)->deleteData($tabela, $where);
		return $delete;
	}
}