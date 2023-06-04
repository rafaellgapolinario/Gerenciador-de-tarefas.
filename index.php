

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
	<header class="header1"> 

	<h3>Sistema de gerenciamento de tarefas </h3>

	</header>
	</div>
	<br>
	

	<section>
		<h1 class="texto1">Tarefas</h1>
		

		<div class="formulario">

			 
			<form action="analise.php" method="post">

       <label for="nome">Nome da Tarefa:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" required></textarea><br><br>
        <label for="data">Data:</label>

        <input type="date" name="data" id="data" required><br><br>
        <label for="prio">Prioridade:</label>

        <select type="prio" name="prio" id="prio" required> 
        	<option value="Alta">Alta</option>
            <option value="Media" selected>Media</option>
            <option value="Baixa">Baixa</option>

        </select><br>
        <label>
            <input type="radio" name="status" value="completa" <?php if(isset($_POST['status']) && $_POST['status'] == 'completa') echo 'checked'; ?>>
            Completa
        </label>
        <label>
            <input type="radio" name="status" value="incompleta" <?php if(isset($_POST['status']) && $_POST['status'] == 'incompleta') echo 'checked'; ?>>
            Incompleta
        </label>

        <input type="submit" value="Enviar">
            </form>

		</div>
		
	</section>
	<br>
	<br>
	<br>
	<br>
	<br>
	 
    <table >
                 <h2 class="tarefa1">Tarefas Cadastradas</h2>
        <thead>              

            <tr class="table1">
            	
                <th>NOME</th><br>
                <th>DESCRIÇÃO</th>
                <th>DATA</th><br>
                <th>PRIORIDADE</th>
                
            </tr>
        </thead>
        
        <tbody>
            <?php include 'listas.php'; ?>
        </tbody>
    </table>

    
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="status">Filtrar por Status:</label>
        <select name="status" id="status">
            <option value="completas">Completas</option>
            <option value="incompletas">Incompletas</option>
        </select>
        <input type="submit" value="Filtrar">
    </form>
		<h2>Tarefas Cadastradas</h2>
    <ul>
        <?php include 'filtro.php'; ?>
    </ul>


	<footer>
		<p>Criado por Rafael Apolinario</p>
	</footer>




</body>
</html>