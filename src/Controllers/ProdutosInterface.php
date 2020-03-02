<?php

namespace Buy\Controllers;

interface ProdutosInterface
{
	public function insertProdutos($tabela, $array): string;

	public function listProdutos($tabela, $where, $campos): array;

	public function changeProdutos($tabela, $array, $where): string;

	public function deleteProdutos($tabela, $where): string;
}