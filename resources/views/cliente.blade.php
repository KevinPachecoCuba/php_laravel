<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
   <?php 
   foreach ($dato as $value){
    echo $value->ape_nom.'<br>';
}
foreach ($dato as $value){
    echo $value->iddocu.'<br>';
    
}
foreach ($dato as $value){
    echo $value->numero.'<br>';
}
foreach ($dato as $value){
    echo $value->sexo.'<br>';
}
   ?>
    
</body>
</html>