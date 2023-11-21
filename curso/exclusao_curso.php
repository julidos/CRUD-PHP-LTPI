<!DOCTYPE html>
<html>
	<head>
	  <title>Exclusão de Curso</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="../style/style.css">
	</head>
	<body>

<?php 

    $id_curso = $_GET["id"];

    include_once "../inc/conectabd.inc.php";

    $query = "DELETE FROM tb_curso WHERE id_curso = $id_curso";

    if ($result = mysqli_query($link, $query)) {
        echo "Exclusão efetuada com sucesso";
    } else {
        echo "Erro ao excluir curso: " . mysqli_error($link);
    }

    mysqli_close($link);
?>  

<br>
<a href="consulta_curso.php">Ver cursos cadastrados</a>

</body>
</html>
