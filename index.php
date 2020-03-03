<?php

$age = 12;
$ano = "https://im9.cz/iR/importprodukt-orig/63f/63ff97a826ab65a9b150b3c10558f015.jpg";


if ($age >= 18 ) {
   $answer = "Děkujeme za kšeft, přijdte zas."; $ano = "https://im9.cz/iR/importprodukt-orig/63f/63ff97a826ab65a9b150b3c10558f015.jpg";
}

else {
  $answer = "Máš smůlu chlapče alkohol a tabák prodáváme od 18ti let."; $ano = "https://im9.cz/iR/importprodukt-orig/205/2051e75aa29cdb632dac36c21943da02.jpg" ;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p> Kolik ti je?</p>
<p> Je mi <?= $age; ?> let</p> <img src="<?= $ano?>" alt="..." />
<p> <?= $answer; ?> </p>  























</body>
</html>