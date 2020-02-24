<?php

namespace Buy\Controllers;

interface VendasInterface
{
	public function insertVendas(): string;

	public function listVendas(): array;

	public function changeVendas(): string;

	public function deleteVendas(): string;
}