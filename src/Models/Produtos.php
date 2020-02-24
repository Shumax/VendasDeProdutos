<?php

namespace Buy\Models;

class Produtos
{
	private $id;
	private $nome;
	private $preco;

	public function getId()
	{
	    return $this->id;
	}	
	
	public function setId($id)
	{
	    return $this->id = $id;
	}

	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome($nome)
	{
	    return $this->nome = $nome;
	}

	public function getPreco()
	{
	    return $this->preco;
	}
	
	public function setPreco($preco)
	{
	    return $this->preco = $preco;
	}

}