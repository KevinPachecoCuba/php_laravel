<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
   foreach ($dato2 as $value){
    echo $value->idcompra.'<br>';
}
foreach ($dato2 as $value){
    echo $value->idproducto.'<br>';
    
}
foreach ($dato2 as $value){
    echo $value->descripcion.'<br>';
}
foreach ($dato2 as $value){
    echo $value->precio.'<br>';
}
foreach ($dato2 as $value){
  echo $value->cantidad.'<br>';
}
foreach ($dato2 as $value){
  echo $value->total.'<br>';
}
   ?>
    
</body>
</html>