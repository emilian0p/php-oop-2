<?php

require_once '/classes/Foods.php';
require_once '/classes/Games.php';
require_once '/classes/User.php';

$user1 = new User('ciao@ciao.it', true);
$user2 = new User('hola@hola.it', false);

var_dump($user1);
var_dump($user2);

$food = new Foods(3.99, "carne di manzo", "05/09/2022");
$food->setQuantity("200gr");
$food->setIngredients("manzo, sale, pepe");
$food->setOrigin("Italia");

var_dump($food);

$game = new Games(9.99, "Osso giocattolo", "gomma");
$game->setColor("green");

var_dump($game);

$user1->cart->addProduct($food);

var_dump($user1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>