<?php

$age = 15;


if ($age >= 18 ) {
   $answer = "Děkujeme za kšeft, přijdte zas.";
}

else {
  $answer = "Máš smůlu chlapče alkohol a tabák prodáváme od 18ti let.";
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
<p> Je mi <?= $age; ?> let</p>
<p> <?= $answer; ?> </p>























</body>
</html>