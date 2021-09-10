<?php
session_start();
include("./script/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="lessons.css">
    <title>Exercices</title>
</head>

<body>

    <?php include("./partial/_navBar.php"); ?>
    <div class="container">
        <h1>Exercices</h1>
    </div>
    <br>
    <div>
        <p>Si nous sommes sur cette page, alors l'exercice 1 est déjà fait: il s'agit
        des numéros des leçons de Jeff Nys: 004 et 005</p>
    </div>
    <br>
    <ol>
        <li><a href="./exercise2.php">Exercice 2</a> PHP 016 et 017</li><br>
        <li><a href="./exercise3.php">Exercice 3</a> PHP 018 et 019</li><br>
        <li><a href="./exercise4.php">Exercice 4</a> PHP 025 à 028</li><br>
        <li><a href="./exercise5.php">Exercice 5</a> PHP 032 et 033</li><br>
        <li><a href="./exercise6.php">Exercice 6</a> PHP 034 et 035</li><br>
        <li><a href="./exercise7.php">Exercice 7</a> PHP 039 et 040</li><br>
        <li><a href="./exercise8.php">Exercice 8</a> PHP 043 et 044</li><br>
        <li><a href="./connexion.php">Exercice 9</a> PHP 049 et 050</li><br>
        <li><a href="./compte.php">Exercice 10</a>PHP 051 à 056</li>
    </ol>
    <div id="cours">
    <a href="https://jeffnys.com/php/"><input type="button" target="_blank" value="Dernier cours : PHP 056 , 10 septembre"></a>
    </div>

    <script src="./bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>