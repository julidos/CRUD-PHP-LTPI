<!DOCTYPE html>
<html>
	<head>
	  <title>Cadastro de Curso</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="../style/style.css">
	</head>
	<body>
		<h1>Cadastrar novo curso</h1>
		<form action="insercao_curso.php" method="POST">
			<label for="id_curso">
				Descrição do Curso:
			</label>
			<input type="text" name="curso" id="id_curso" required>
			<br>
			<label for="nr_carga_horaria">
				Carga Horária:
			</label>
			<input type="number" name="carga_horaria" id="nr_carga_horaria" required>
			<br>
			<label for="dt_inicio">
				Data de Início:
			</label>
			<input type="date" name="data_inicio" id="dt_inicio" required>
			<br>
			<input type="submit" value="Cadastrar Curso">
		</form>
	</body>
</html>
