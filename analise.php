<?php
//Aqui analisa e encaminha as tarefas adicionadas para o banco de dados ems na coleçao tarefas

$host = 'localhost';  
$port = 27017;  // 


$uri = "mongodb://$host:$port";
$manager = new MongoDB\Driver\Manager($uri);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $prio = $_POST['prio'];
    $status = $_POST['status'];

    
    $document = [
        'nome' => $nome,
        'descricao' => $descricao,
        'data' => $data,
        'prio' => $prio,
        'status' => $status
    ];

    
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->insert($document);

    
    $manager->executeBulkWrite('ems.tarefas', $bulk);



	
	    
header("Location: index.php");
    exit();


}
?>








