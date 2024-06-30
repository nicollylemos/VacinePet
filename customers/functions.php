<?php

	include('../config.php');
	include(DBAPI);

	$customers = null;
	$customer = null;

	/**
	 *  Listagem de Clientes
	 */
	function index() {
		global $customers;
		$customers = find_all('customers');
		
	}
	function find_all( $table ) {
	return find($table);
}

	/**
	 *  Visualização de um Cliente
	 */
	function view($id = null) {
	  global $customer;
	  $customer = find("customers", $id);
	}
	
	/**
	 * Formatação de Datas
	 */
	function formatadata($data , $formato) {
	  $dt = new DateTime ($data , new DateTimeZone("America/Sao_Paulo")); 
	 return $dt-> format ($formato) ; // "d/m/Y H:i:s" 
	}
	
	
	/**
	 *  Formatação de CEP
	 */
	
	function formatacep ($cep) {
		return substr($cep, 0, 5 ) . "-" . substr ($cep, 5);
	
	
	}
	
	function formatatel($tel){
		return "(" . substr($tel, 0, 2) . ")" . substr($tel, 5) . "-" . substr($tel, 4);
	}
	
	
?>