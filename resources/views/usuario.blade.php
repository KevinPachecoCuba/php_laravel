<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     foreach ($dato5 as $value){
        echo $value->ape_nom.'<br>';
    }
    foreach ($dato5 as $value){
        echo $value->use_user.'<br>';
        
    }
    foreach ($dato5 as $value){
        echo $value->usu_pass.'<br>';
    }
    ?>
</body>
</html>