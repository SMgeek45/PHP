<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <title>exercise3</title>
</head>
<body>
    
<h1>Exercice 3</h1>
    <?php
    //PHP 018
    $tab1 = ["moteur", "carotte", "haricot", "pomme de terre", "usine", "salade", "navet", "marteau"];
    ?>
    <p>voici les éléments du tableau de base:
    <ul>
        <li><?php echo $tab1[0]; ?></li>
        <li><?php echo $tab1[1]; ?></li>
        <li><?php echo $tab1[2]; ?></li>
        <li><?php echo $tab1[3]; ?></li>
        <li><?php echo $tab1[4]; ?></li>
        <li><?php echo $tab1[5]; ?></li>
        <li><?php echo $tab1[6]; ?></li>
        <li><?php echo $tab1[7]; ?></li>
    </ul>
    </p>
    <h3>Premier exercice:</h3>
    <p>retirer les 3 intrus: et afficher les valeurs</p>
    <p>résultat:
        <?php
        // delete the 5th element
        array_splice($tab1, 4, 1);
        // delete the 1st element
        array_shift($tab1);
        // delete the last element
        array_pop($tab1);
        ?>
    <ul>
        <li><?php echo $tab1[0]; ?></li>
        <li><?php echo $tab1[1]; ?></li>
        <li><?php echo $tab1[2]; ?></li>
        <li><?php echo $tab1[3]; ?></li>
        <li><?php echo $tab1[4]; ?></li>
    </ul>
    </p>
    <h3>Second exercice:</h3>
    <p>transformer la chaîne de caractère "bleu, vert, noir, rouge, jaune" en un tableau</p>
    <p>ajouter en première position du tableau la valeur "violet"</p>
    <p>résultat:
        <?php
        // TO DO
        $startString = "bleu, vert, noir, rouge, jaune";
        $tab2 = explode(", ", $startString);
        // insert an element at the beginning of a table
        array_unshift($tab2, "violet"); ?>
        <ul>
        <li><?php echo $tab2[0]; ?></li>
        <li><?php echo $tab2[1]; ?></li>
        <li><?php echo $tab2[2]; ?></li>
        <li><?php echo $tab2[3]; ?></li>
        <li><?php echo $tab2[4]; ?></li>
        <li><?php echo $tab2[5]; ?></li>
        </ul>
        <!--            <ul>
                <li><?php // echo $tab1[0]; 
                    ?></li>
                <li><?php // echo $tab1[1]; 
                    ?></li>
                <li><?php // echo $tab1[2]; 
                    ?></li>
                <li><?php // echo $tab1[3]; 
                    ?></li>
                <li><?php // echo $tab1[4]; 
                    ?></li>
                <li><?php // echo $tab1[5]; 
                    ?></li>
            </ul> -->
    </p>
    <script src="./bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>