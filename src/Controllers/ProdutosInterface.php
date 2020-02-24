<?php

namespace Buy\Controllers;

interface ProdutosInterface
{
	public function insertProdutos($tabela, $array): string;

	public function listProdutos(): array;

	public function changeProdutos(): string;

	public function deleteProdutos(): string;
}