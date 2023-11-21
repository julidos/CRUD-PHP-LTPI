<!DOCTYPE html>
<!-- alteracao_curso.php -->
<html>
<head>
    <title>Cadastro de Curso - Alteração</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
<?php 
$id_curso = $_GET["id_curso"];
$ds_curso = $_GET["ds_curso"];
$nr_carga_horaria = $_GET["nr_carga_horaria"];
  
include_once "../inc/conectabd.inc.php";

$query = "UPDATE tb_curso 
          SET ds_curso = '$ds_curso'
            , nr_carga_horaria = $nr_carga_horaria
          WHERE id_curso = $id_curso;";

if ($result = mysqli_query($link, $query)) {
    echo "Alteração efetuada com sucesso";
} else {
    echo mysqli_error($link);
}

mysqli_close($link);
?>  

<br>
<a href="consulta_curso.php">Ver cursos cadastrados</a>

</body>
</html>
