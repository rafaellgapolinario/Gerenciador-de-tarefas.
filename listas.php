<?php

//SISTEMA PARA LISTAR AS TAREFAS NA PAGINA INICIAL
require_once 'analise.php';

$query = new MongoDB\Driver\Query([]);
$cursor = $manager->executeQuery('ems.tarefas', $query);

foreach ($cursor as $document) {
    echo '<tr>';
    echo '<td>' . $document->nome . '</td>';
    echo '<td>' . $document->descricao . '</td>';
    echo '<td>' . $document->data . '</td>';
    echo '<td>' . $document->prio . '</td>';
    echo '<td><a href="editar.php?id=' . $document->_id . '">Editar</a> | <a href="deletar.php?id=' . $document->_id . '">Remover</a></td>';
    echo '</tr>';
}
?>