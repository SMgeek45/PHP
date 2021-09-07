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
        <p>PHP : 009, 012, 013, 015, [Exercises: 2, 3, 4, 5 et 6] 036, [Exercise 7], 041, 042 [Exercise 8]</p>
        <pre>
    résultats php
    
=====================09======================
<?php
#PHP 09#

$string = "php tests";
$int = 3;
$float = 3.14;
$array = [];
$array[] = $string;
$array[] = $int;
$array[] = $float;
$array = ["veggie", "carotte", "choux"];
var_dump($array);

$boolean = true;
var_dump($boolean);
?>
====================12========================
<?php
#PHP 012#

$firstName = 'Stéphane';
$name = "Marajo";
$fullName0 = $firstName . " " . $name;
$fullName1 = " $firstName $name";
echo "Le gugus s'appelle $fullName1 ";
?>
====================13========================
<?php
#PHP 013#

$arrayValue = [
    "value1",
    "value2",
    7,
    9.4,
    [
        "tab valeur1",
        4
    ],
    "coucou"
];

$associatArray = [
    `name` => "Marajo",
    `firstName` => "Stephane",
];

var_dump($arrayValue[2]);
?>
====================15========================
<?php
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
<?php echo $tab[`tab2`][`tab2Key3`][`keyMachin`]?> 
    
====================36========================
<?php
#PHP 036#

function maFonction() {
    echo "Coucou, je viens de la fonction maFonction";
}

function addition1(int $a, int $b): int {
    $c = $a + $b;
    return $c;
};

echo "Je suis le programme principal <br>";
maFonction();
echo "<br>";
$nombre1 = 16;
$nombre2 = 13;
$resultat = addition1($nombre1, $nombre2);
echo "Le résultat du calcul $nombre1 + $nombre2 = $resultat <br>"
?>
====================37========================
<?php
#PHP 037#

$nombre1 = 16;
$nombre2 = 13;

define("CONSTANTE1", "ma constante est magnifique.");
define("NOMBRE3", 3);

function addition2(int $nombrea, int $nombreb): int {
    $nombrea = $nombrea + 4;
    $prout = "pet";
    return $nombrea + $nombreb + NOMBRE3;
};

echo "Je suis le programme principal <br>";
maFonction();
echo "<br>";

$resultat = addition2($nombre1, $nombre2);
echo "Le résultat du calcul $nombre1 + $nombre2 = $resultat <br>";
?>
=====================41=======================   
<?php
#PHP 041#

$tab = [
    "key" => `$value`,
    "foo" => `bar`,
];

function createVariablesTab(string ... $args): array {
   //Accéder au prénom dans ce cas => $args[1]
    return $args;
}

$values = createVariablesTab("Bozo", "Leclown", "1 rue du cirque", "75000", "Paris");
var_dump($values);
?>

<?php 
function nameEtc(string $name, string $firstName ="Anonyme"): string {
    return "Vous vous appelez: $name et votre prénome est $firstName";
}

echo nameEtc("Zorro", "Lerenard");
?> <br>

<?php 
$text = "coucou";

function addBeuh(string &$text): void {
$text .= " beuh ";
var_dump($text);
}
// $text est valable uniquement dans la fonction et non dans la variable
addBeuh($text);
?>
====================42=========================
<?php 

$data = file_get_contents("./data/jsonDB.json");

$tab = json_decode($data, true);
$tab ["email"] = "bozo75@gmail.com";

$jsonData = json_encode($tab);

file_put_contents("./data/jsonDB.json", $jsonData);
?>
====================//=========================

<?php
$alphabet = "ABCD";
$alphabetTab = str_split($alphabet);
$doubleAlphaTab = array_merge($alphabetTab, $alphabetTab);

$sizeAlphabet = count($alphabetTab);


for ($i = 0; $i < $sizeAlphabet; $i++) {
    for ($j = 0; $j < $sizeAlphabet; $j++) {
        $line = $alphabetTab[$i];
        $column = $alphabetTab[$j];
        $vigenere[$line][$column] = $doublelphaTab[$j + $i];
    }
}
var_dump($vigenere);
?>
====================//=========================
<?php
if($_SESSION["user"]) {
    echo "Vous êtes connecté.";
} else {
    echo "Vous n'existez pas.";
}
?>
    </pre>

        <p> test github</p>
    </div>

    <script src="./bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>