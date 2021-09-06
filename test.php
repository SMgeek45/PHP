<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php include("./partial/_navBar.php"); ?>
<div class="container">
    <h1>Test</h1>
    <pre>
    résultats php ===============================

    <?php

        #PHP 09#

        $string = "php tests";
        $int = 3;
        $float = 3.14;
        $array = [];
        $array[]= $string;
        $array[]= $int;
        $array[]=$float;
        $array = ["veggie","carotte","choux"];
        var_dump($array);

        $boolean = true;
        var_dump($boolean);

        #PHP 012#

        $firstName = 'Stéphane';
        $name = "Marajo";
        $fullName0 = $firstName . " " . $name;
        $fullName1 = " $firstName $name";
        echo "Le gugus s'appelle $fullName1 ";

        #PHP 013#

        $arrayValue = [
            "value1",
            "value2",
            7,
            9.4,
            ["tab valeur1",
            4],
            "coucou"
        ];

        $associatArray = [
            `name` => "Marajo",
            `firstName` => "Stephane",
        ];

        var_dump($arrayValue[2]);

        #PHP 015#

        $tab1 = [
            `tab1Key1` => "tableau 1 valeur 1",
            `tab1Key2` => "tableau 1 valeur 2",
            `tab1Key3` => "tableau 1 valeur 3",
        ];

        $tab2 = [
            `tab2Key1` => "tableau 2 valeur 1",
            `tab2Key2` => "tableau 2 valeur 2",
            `tab2Key3` => [
                `keyTruc` => "tableau 2 valeur 3",
                `keyMachin` => "autre chose",
            ],
        ];

        $tab3 = [
            `tab3Key1` => "tableau 3 valeur 1",
            `tab3Key2` => "tableau 3 valeur 2",
            `tab3Key3` => "tableau 3 valeur 3",
        ];

        $tab[] = [
            `tab1` => $tab1,
            `tab2` => $tab2,
            `tab3` => $tab3,
        ];

        var_dump($tab[`tab2`][`tab2Key3`][`keyMachin`]);
        
        ?>

        Affichage d'une donnée précise:
        <?php echo $tab[`tab2`][`tab2Key3`][`keyMachin`]; ?>
    

    =============================================


    $alphabet = "ABCD";
    $alphabetTab = str_split($alphabet);
    $doubleAlphaTab = array_merge($alphabetTab, $alphabetTab);
    
$sizeAlphabet = count($alphabetTab);


    for ($i=0; $i < $sizeAlphabet; $i++) {
        for ($j = 0; $j < $sizeAlphabet; $j++) {
            $line = $alphabetTab[$i];
            $column = $alphabetTab[$j];
            $vigenere[$line][$column] = $doublelphaTab[$j + $i];
        }
    }
    var_dump($vigenere);

    </pre>

   <p> test github</p>
</div>

<script src="./bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>