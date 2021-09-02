<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    foreach ($dato4 as $value){
        echo $value->ruc.'<br>';
    }
    foreach ($dato4 as $value){
        echo $value->iddoc.'<br>';
        
    }
    foreach ($dato4 as $value){
        echo $value->telefono.'<br>';
    }
    foreach ($dato4 as $value){
        echo $value->celular.'<br>';
    }
    foreach ($dato4 as $value){
      echo $value->direccion.'<br>';
    }
    ?>
</body>
</html>