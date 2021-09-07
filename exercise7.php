<?php
require("./script/crytage.php");
if (!empty($_POST)) {
    if ($_POST["text"]) {
        $text = strip_tags($_POST["text"]);
    }
    if ($_POST["key"]) {
        $key = strip_tags($_POST["key"]);
    }
    if ($_POST["action"]) {
        $action = strip_tags($_POST["action"]);
    }

    switch ($action) {
        case "encodeVigenere":
            $result = codeVigenere($text, $key);
            break;
        case "decodageVigenere":
            $result = uncodeVigenere($text, $key);
            break;
            $result = "Vous devez d'abord choisir une méthode";
        default;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <title>Exercise7</title>
</head>

<body>
    <?php include("./partial/_navBar.php"); ?>
    <div class="container">
        <h1>Exercice 7</h1>
        <h3>Programme de codage et décodage suivant divers protocoles de cryptage</h3>
        <form method="post">
            <div class="form-group">
                <label for="text">Le texte</label>
                <textarea name="text" class="form-control border border-3" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="key">La clé</label>
                <input type="text" class="form-control border border-3" name="key">
            </div>
            <div class="form-group">
                <label for="method" class="form-label mt-4">Action à effectuer</label>
                <select class="form-select border border-3" name="action">
                    <option value="">-- Choisissez l'action --</option>
                    <option value="">Encodage par vigenère</option>
                    <option value="">Décodage par vigenère</option>
                </select>
            </div>
            <a href="/exercise7.php" class="btn btn-primary mt-3 mb-3">Annuler</a>
            <input type="submit" class="btn btn-primary mt-3 mb-3" value="Envoyer">
        </form>
        <p>========================================</p>
        <?php if($result):?>
            <p>Le texte : <?php echo $text; ?>
            avec la clé: <?php echo $key;?>
            renvoie le résultat<?php echo $result;?></p>
        <?php endif ?>

</div>

    <script src="./bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>