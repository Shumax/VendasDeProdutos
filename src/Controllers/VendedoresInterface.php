<?php

namespace Buy\Controllers;

interface VendedoresInterface
{
	public function insertVendedores(): string;

	public function listVendedores(): array;

	public function changeVendedores(): string;

	public function deleteVendedores(): string;
}