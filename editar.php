
<?php
//resolvi criar uma pagina para editar as tarefas que quiser.

    require_once 'analise.php';

    $taskId  = $_GET['id'];

    $filter = ['_id' => new MongoDB\BSON\ObjectID($taskId)];
    $query = new MongoDB\Driver\Query($filter);
    $cursor = $manager->executeQuery('ems.tarefas', $query);
    $task = current($cursor->toArray());
    
        
 ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale=1>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Gerenciamento de Tarefas</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">


</head>
<body id="all">
    
	<div>
	<header> 

	<h3 class="texto1">Sistema de Edição de tarefas </h3>

	</header >
            <h2 class="texto1">Editar Tarefas</h2><br><br><br>
    <form method="POST" action="atualizar.php" class="cadastro">
        <input type="hidden" name="task_id" value="<?php echo $taskId; ?>">
        
        <label for="nome">Nome da Tarefa:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" required></textarea><br><br>

        <label for="data">Data:</label>
        <input type="date" name="data" id="data" required><br><br>

        <label for="prio">Prioridade:</label>
        <select type="prio" name="Prioridade" id="prio" required> 
            <option value="Alta">Alta</option>
            <option value="Media" selected>Media</option>
            <option value="Baixa">Baixa</option>

        </select><br>
        

        <input type="submit" value="Salvar">
    </form>
</body>
</html>
	


	<footer><br><br><br><br><br>
		<p>Criado por Rafael Apolinario</p>
	</footer>




</body>
</html>

