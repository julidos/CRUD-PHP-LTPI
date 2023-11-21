<!DOCTYPE html>
<!-- form_alteracao_curso.php -->
<?php
include "../inc/conectabd.inc.php";
include "../inc/funcoes.inc.php";

$id = $_GET["id"];
$al = recupera_curso($id);
?>

<html>
<head>
    <title>Atualizar Curso</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
    <h1>Atualizar curso</h1>
    <form action="alteracao_curso.php" method="GET">
        <input type="hidden" name="id_curso" value="<?php echo $al["id_curso"];?>">
        
        <label for="ds_curso">
            Descrição do Curso:
        </label>
        <input type="text" name="ds_curso" id="ds_curso" value="<?php echo $al["ds_curso"];?>">
        <br>
        
        <label for="nr_carga_horaria">
            Carga Horária:
        </label>
        <input type="number" name="nr_carga_horaria" id="nr_carga_horaria" value="<?php echo $al["nr_carga_horaria"];?>">
        <br>
        
        <input type="submit" value="Ok">
    </form>
</body>
</html>
