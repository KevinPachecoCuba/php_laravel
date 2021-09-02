<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    foreach ($dato3 as $value){
        echo $value->marca.'<br>';
    }
    foreach ($dato3 as $value){
        echo $value->modelo.'<br>';
        
    }
    foreach ($dato3 as $value){
        echo $value->descripcion.'<br>';
    }
    foreach ($dato3 as $value){
        echo $value->stock.'<br>';
    }
    foreach ($dato3 as $value){
      echo $value->precio.'<br>';
    }
    ?>
</body>
</html>