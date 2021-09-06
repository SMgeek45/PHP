<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <title>exercise4</title>
</head>
<body>
<?php include("./partial/_navBar.php"); ?>

    <?php 
    #PHP 025#
    ?>

<h1>Exercice 4</h1>
    <h5>1- créer une <a href="https://www.latoilescoute.net/table-de-vigenere" target="_blank">table de vigenère</a></h5>
    <?php
    // create a vigenere tab
    $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $alphabetTab = str_split($alphabet);
    $doubleAlphaTab = array_merge($alphabetTab, $alphabetTab);
    $sizeAplabet = count($alphabetTab);

    for ($i = 0; $i < $sizeAplabet; $i++){
        for ($j = 0; $j <$sizeAplabet; $j++) {
            $line = $alphabetTab[$i];
            $column = $alphabetTab[$j];
            $vigenere[$line][$column] = $doubleAlphabetTab[$i + $j];
        }
    }
    var_dump($vigenere);
    ?>

    <h5>2- encode le message "APPRENDRE PHP EST UNE CHOSE FORMIDABLE" avec la clé "BACKEND"</h5>
    <?php
    $message = "APPRENDRE PHP EST UNE CHOSE FORMIDABLE";
    $key = "BACKEND";
    $messageTab = str_split($message);
    $keyTab = str_split($key);
    $keySize = count($keyTab);

    $keyCounter = 0;
    foreach ($messageTab as $pointer => $letterToEncode) {
        $positionKeyLetter = $keyCounter % $keySize;
        $keyLetter = $keyTab[$positionKeyLetter];
        if($letterToEncode != " ") {
            $encodedMessage[] = $vigenere[$letterToEncode][$keyLetter];
        } else {
            $encodedMessage[] = " ";
        }
        $counter++;
    }
    // TO DO
    $cryptedMessage = implode($encodedMessage);
    /**
    * astuce pour la rotation de la clé BACKEND
    * 14 / 7 -> 2
    * 15 / 7 -> 2 reste 1
    * pour récuperer le "reste 1" il faut faire un modulo
    * 15 % 7 -> 1
    * 176 % 7 -> 1 (25 x 7 et reste 1)
    */
    ?>
    <p>le message est: <?php echo $message; ?></p>
    <p>la clé est: <?php echo $key ?></p>
    <p>le résultat est: <?php echo $cryptedMessage; ?></p>
    <h5>3- decoder le message "TWA PEE WM TESLH WL LSLVNMRJ" avec la clé "VIGENERE"</h5>
    <?php
    $encodedMessage = "TWA PEE WM TESLH WL LSLVNMRJ";
    $key4decode = "VIGENERE";
    $encodeMessageTab2 = str_split($encodedMessage);
    $key4decodeTab2 = str_split($key4decode);
    $key4decodeSize2 = count($key4decodeTab);

    $keyCounter2 = 0;
    foreach ($encodeMessageTab as $pointer => $letterToEncode) {
        $positionKeyLetter2 = $keyCounter2 % $key4decodeSize;
        $keyLetter = $key4decodeTab2[$positionKeyLetter];
        if($letterToEncode != " ") {
            for ($i = 0; $i < $sizeAplabet; $i++){
                $lineToDecode = $alphabetTab [$i];
                if ($vigenere[$i][$keyLetter] == $letterToEncode); {
                    $decrypteMessage[] = $lineToDecode;
                }
            }
        } else {
            $decrypteMessage[] = " ";
        }
        $counter++;
    }
    // TO DO
    $decodeMessage = implode($decrypteMessage);
    // TO DO
    ?>
    <p>le message chiffré est: <?php echo $encodedMessage; ?></p>
    <p>la clé est: <?php echo $key4decode ?></p>
    <p>le résultat est: <?php echo $decodedMessage; ?></p>
    
<script src="./bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>