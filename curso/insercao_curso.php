<!DOCTYPE html>
<!-- insercao_curso.php -->
<html>
	<head>
	  <title>Cadastro de Curso - Inclusão</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="../style/style.css">
	</head>
	<body>

<?php 

include_once "../inc/conectabd.inc.php";

    $descricao_curso = $_POST["curso"];
    $carga_horaria = $_POST["carga_horaria"];
    $data_inicio = $_POST["data_inicio"];

    $query = "INSERT INTO tb_curso 
              (ds_curso, nr_carga_horaria, dt_inicio) 
              VALUES 
              ('$descricao_curso', $carga_horaria, '$data_inicio')";

    if ($result = mysqli_query($link, $query)) {
        echo "Inclusão efetuada com sucesso";
    } else {
        echo "Erro ao cadastrar curso: " . mysqli_error($link);
    }

    mysqli_close($link);
?>  

<br>
<a href="consulta_curso.php">Ver cursos cadastrados</a>

</body>
</html>
