

<?php
 //Aqui utilizaremos para deletar as tarefas direto do banco de dados(faltar colocar um aviso para confirmar se deseja isso)
require_once 'analise.php';

$document = $_GET['id'];

$filter = ['_id' => new MongoDB\BSON\ObjectID($document)];
$bulk = new MongoDB\Driver\BulkWrite;
$bulk->delete($filter);
$manager->executeBulkWrite('ems.tarefas', $bulk);

header("Location: index.php");



?>

