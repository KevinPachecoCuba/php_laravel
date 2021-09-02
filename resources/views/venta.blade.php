<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
   foreach ($dato6 as $value){
    echo $value->serie.'<br>';
}
foreach ($dato6 as $value){
    echo $value->num_corre.'<br>';
    
}
foreach ($dato6 as $value){
    echo $value->fec_emi.'<br>';
}
foreach ($dato6 as $value){
    echo $value->igv_total.'<br>';
}
foreach ($dato6 as $value){
  echo $value->sub_total.'<br>';
}
foreach ($dato6 as $value){
  echo $value->total.'<br>';
}
   ?>
</body>
</html>