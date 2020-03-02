<?php

namespace Buy\Controllers;

use Buy\Dao\Manipulation;

class VendedoresControl implements VendedoresInterface
{
	public function insertVendedores(): string
	{
		$in = (new Manipulation)->insertData($tabela, $array);
		return $in;
	}

	public function listVendedores(): array
	{
		$list = (new Manipulation)->listData($tabela, $where, $campos);
		return $list;
	}

	public function changeVendedores(): string
	{
		$change = (new Manipulation)->changeData($tabela, $array, $where);
		return $change;
	}

	public function deleteVendedores(): string
	{
		$delete = (new Manipulation)->deleteData($tabela, $where);
		return $delete;
	}
}