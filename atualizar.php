<?php
require_once 'listas.php';


    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $prio = $_POST['prio'];

    $filter = ['_id' => new MongoDB\BSON\ObjectID($taskId)];
    $update = ['$set' => [
        'nome' => $nome,
        'descricao' => $descricao,
        'data' => $data,
        'prio' => $prio

    ]];
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->update($filter, $update);
    $manager->executeBulkWrite('ems.tarefas', $bulk);
    ?>