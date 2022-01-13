<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$op = $_POST['op'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php
    if ($op == '+'){
        echo $n1+$n2;
    }else if ($op == '-'){
        echo $n1-$n2;
    }else if ($op == '*'){
        echo $n1*$n2;
    }else{
        echo $n1/$n2;
    }
    ?>
    
</body>
</html>