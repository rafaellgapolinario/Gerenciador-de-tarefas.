<?php
require_once 'analise.php';

$status = $_POST['status'] ?? 'todos';

$filter = [];
if ($status === 'completas') {
    $filter = ['status' => 'completa'];
} elseif ($status === 'incompletas') {
    $filter = ['status' => 'incompleta'];
}

$query = new MongoDB\Driver\Query($filter);
$cursor = $manager->executeQuery('ems.tarefas', $query);

foreach ($cursor as $document) {
    echo '<li>' . $document->task_name . '</li>';
}
?>
