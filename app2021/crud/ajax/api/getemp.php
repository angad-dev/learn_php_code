<?php
require_once __DIR__.'/query-builder/Query.php';
require_once __DIR__.'/functions.php';

header("Content-type:application/json");
http_responce_code(200);
if($_SERVER['REQUEST_METHOD']=='GET'){
	
	$query = new Query();
	$records = $query->select("*")->table('emp')->allRecords();



	
	
}else{
	echo json_encode($responce);
	exit();	
}






?>


