<?php
 include  './Model/Aluno.php';
 $aluno = new Aluno();
 $aluno->cadastrarAluno(1,"Luiz", 0, 0, false );
 
 var_dump($aluno);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGA</title>
</head>
<body>
    
</body>
</html>