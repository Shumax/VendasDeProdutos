<?php

namespace Buy\Controllers;

interface VendedoresInterface
{
	public function insertVendedores($tabela, $array): string;

	public function listVendedores($tabela, $where, $campos): array;

	public function changeVendedores($tabela, $array, $where): string;

	public function deleteVendedores($tabela, $where): string;
}