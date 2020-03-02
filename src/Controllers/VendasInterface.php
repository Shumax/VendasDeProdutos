<?php

namespace Buy\Controllers;

interface VendasInterface
{
	public function insertVendas($tabela, $array): string;

	public function listVendas($tabela, $where, $campos): array;

	public function changeVendas($tabela, $array, $where): string;

	public function deleteVendas($tabela, $where): string;
}