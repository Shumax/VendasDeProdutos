<?php

namespace Buy\Dao;

define('DB_SERVER','127.0.0.1');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_BANCO','sales');
define('qdo','');

class DataConnect{
	
	public function connection()
	{
		$conecta = mysqli_connect(
			DB_SERVER, 
			DB_USERNAME, 
			DB_PASSWORD, 
			DB_BANCO) 
		or die(mysqli_connect_error());
		
		if($conecta == false){
			echo "não conectou";
		}else{
			return $conecta;
		}
	}
	
}
