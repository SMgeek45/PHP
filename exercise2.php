<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <title>Exercise2</title>
</head>
<body>
<h1>Exercice 2</h1>
    <h3>Décoder des messages</h3>
    <p>les messages à décoder</p>
    <?php
    $message1 = "0@sn9sirppa@#?ia'jgtvryko1";
    $message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
    $message3 = "aopi?sgnirts@#?sedhtg+p9l!";
    #PHP 016#
    ?>

    <ul>
        <li>message 1 : <?php echo $message1; ?></li>
        <li>message 2 : <?php echo $message2; ?></li>
        <li>message 3 : <?php echo $message3; ?></li>
    </ul>
    <p>comment proceder?</p>
    <ol>
        <li>Calculer la longueur de la chaîne et la diviser par 2, tu obtiendras ainsi le "chiffre-clé".</li>
        <li>Récupère ensuite la <a href="https://www.php.net/manual/fr/function.substr.php">sous-chaîne</a>
            de la longueur du chiffre-clé en commençant à partir du 6ème caractère.</li>
        <li>Remplace les chaînes '@#?' par un espace.</li>
        <li>Pour finir, inverse la chaîne de caractères.</li>
    </ol>

    <p>résultats:</p>
    <?php
    #PHP 017#
    /**
     * pour la division, un code à tester:
     * $number = 50;
     * $result = 50 / 2;
     * echo $result;
     */ ?>
    <p>message1: <?php echo $decodedMessage1;
                    // We search for the key
                    ?> <br> 1 <?php
                    $key1 = strlen($message1) / 2;
                    echo $key1;
                    // We look after the sub string with key
                    ?> <br> 2 <?php
                    $subString1 = substr($message1, 5, $key1);
                    echo $subString1;
                    // We replace @#? by some spaces
                    ?> <br> 3 <?php
                    $messageWithSpaces1 = str_replace("@#?", " ", $subString1);
                    echo $messageWithSpaces1;
                    //We reverse the string
                    ?> <br> 4 <?php
                    $decodedMessage1 = strrev($messageWithSpaces1);
                    echo $decodedMessage1; ?>

        <br><br>

        message2: <?php echo $decodedMessage2;
                    ?> <br> 1 <?php
                        $key2 = strlen($message2) / 2;
                        echo $key2;
                        ?> <br> 2 <?php
                        $subString2 = substr($message2, 5, $key2);
                        echo $subString2;
                        ?> <br> 3 <?php
                        $messageWithSpaces2 = str_replace("@#?", " ", $subString2);
                        echo $messageWithSpaces2;
                        ?> <br> 4 <?php
                        $decodedMessage2 = strrev($messageWithSpaces2);
                        echo $decodedMessage2; ?>

        <br><br>

        message3: <?php echo $decodedMessage3;
                    ?> <br> 1 <?php
                        $key3 = strlen($message3) / 2;
                        echo $key3;
                        ?> <br> 2 <?php
                        $subString3 = substr($message3, 5, $key3);
                        echo $subString3;
                        ?> <br> 3 <?php
                        $messageWithSpaces3 = str_replace("@#?", " ", $subString3);
                        echo $messageWithSpaces3;
                        ?> <br> 4 <?php
                        $decodedMessage3 = strrev($messageWithSpaces3);
                        echo $decodedMessage3; ?><br>
    </p>
    <script src="./bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>