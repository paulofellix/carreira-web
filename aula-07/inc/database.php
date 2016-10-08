<?php 
/**
 *	Biblioteca de Banco de Dados
 * 	v 0.0.1
 * 	Author: Eu
 */

function open_database() {

	try {
		
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		if ($conn) {
			// echo '<p class="alert alert-success">Banco de Dados Conectado!</p>';
		}
		return $conn;

	} catch(Exception $e) {
		echo $e->getMessage();
		return null;
	}
}

function close_database($conn) {
 	try {
		$conn->close();
	} catch(Exception $e) {
		echo $e->getMessage();
	}
}

function find_all($table = null,$id = null){

	$database = open_database();
	$found = null;

	try {
	  if ($id) {
	    $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
	    $result = $database->query($sql);
	    
	    if ($result->num_rows > 0) {
	      $found = $result->fetch_assoc();
	    }
	    
	  } else {
	    
	    $sql = "SELECT * FROM " . $table;
	    $result = $database->query($sql);
	    
	    if ($result) {
		    //if ($result->num_rows > 0) {
		      $found = $result->fetch_all(MYSQLI_ASSOC);
		    //}
		}
	  }
	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }
	
	close_database($database);
	return $found;
}

function save($table = null, $data = null) {

	$database = open_database();

	$columns = null;
	$values = null;

	//print_r($data);

	foreach ($data as $key => $value) {
		$columns .= trim($key, "'") . ",";
		$values .= utf8_decode("'$value',");
	}

	// remove a ultima virgula
	$columns = rtrim($columns, ',');
	$values = rtrim($values, ',');
	
	$sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

	try {
		$database->query($sql);

		$_SESSION['message'] = 'Registro cadastrado com sucesso.';
		$_SESSION['type'] = 'success';

	} catch (Exception $e) { 
		
    	$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
		die("Erro ao inserir registro");
   	} 
	
	close_database($database);
}

function remove($table = null,$id = null){

	$database = open_database();

	$sql = "DELETE FROM " . $table . " where id = " . $id;

	try {
		$database->query($sql);

		$_SESSION['message'] = 'Registro deletado com sucesso.';
		$_SESSION['type'] = 'success';

	} catch (Exception $e) { 
		
    	$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
		die("Erro ao remover registro");
   	} 
}