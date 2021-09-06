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
<?php include("./partial/_navBar.php"); ?>
 
 <?php
$code = hexdec("223a");
$result = "Tous les gagnant ont joué. Essayez";
$response = "";

if (!empty($_POST)) {
    if ($_POST["try"]) {
        $try = strip_tags($_POST["try"]);
    }
    if (isset([$try])) {
        if ($code == $try) {
            $result = "Bien joué, le code est $try";
        }
        else {
            $result = "Non, le code n'est pas $try";
        }
    }
}
$test = 0;
$continue = true;
$noInfinitLoop =10000;
while ($continue) {
    if ($test == $code) {
        $continue = false;
        $response = strval($test);
    } else {
        $test++;
    } 

    if ($noInfinitLoop < 0) {
        $continue = false;
        $response = "boucle infinie";
    }
    $noInfinitLoop--; //on ne peut plus faire de boucle infinie
}

?>

<p>Le code à trouver est compris entre 0 et 10000.
    Tentez votre chance ou faites en sorte que la machine vous aide à trouver la bonne réponse.</p>
    <?php if ($response) : ?>
        <p>La réponse est : <?php echo $response ?></p>
        <?php endif ?>
    <script src="./bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>