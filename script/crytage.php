<?php 

function getAplphabetVigenere(): array {
    $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $alphabetTab = str_split($alphabet);
    return $alphabetTab;
}

function sizeAlphabetVigenere(): int {
$alphabetTab = getAplphabetVigenere();
$size = count($alphabetTab);
return$size;
}

function createVigenereTab(): array {
    
    $alphabetTab = getAplphabetVigenere();
    $doubleAlphaTab = array_merge($alphabetTab, $alphabetTab);
    $sizeAplabet = count($alphabetTab);

    for ($i = 0; $i < $sizeAplabet; $i++){
        for ($j = 0; $j <$sizeAplabet; $j++) {
            $line = $alphabetTab[$i];
            $column = $alphabetTab[$j];
            $vigenere[$line][$column] = $doubleAlphaTab[$i + $j];
        }
    }
    return $vigenere;
}

function codeVigenere(string $message, string $key): string {
    
    //create the vigenere tab
   $vigenere = createVigenereTab();
   //encode message
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
           $cryptedMessage[] = " ";
       }
       $keyCounter++;
   }
}
   // TO DO
   $cryptedMessage = implode($encodedMessage); 
    return $crypteddMessage;


function uncodeVigenere(string $encodedMessage, string $key): string {
   
   //create the vigenere tab
    $vigenere = createVigenereTab();
    $sizeAplabet = sizeAlphabetVigenere();
    $alphabetTab = getAlphabetVigenere();
    //create message
    $encodeMessageTab2 = str_split($encodedMessage);
    $keyTab2 = str_split($key);
    $keySize2 = count($keyTab);

    $keyCounter2 = 0;
    foreach ($encodeMessageTab as $pointer => $letterToEncode): {
        $positionKeyLetter2 = $keyCounter2 % $keySize;
        $keyLetter = $keyTab2[$positionKeyLetter];
        if($letterToEncode != " ") {
            for ($i = 0; $i < $sizeAplabet; $i++) {
                $lineToDecode = $alphabetTab [$i];
                if ($vigenere[$i][$keyLetter] == $letterToEncode) {
                    $decrypteMessage[] = $lineToDecode;
                }
            }
        } else {
            $decrypteMessage[] = " ";
        }
        $counter++;
    }
    $decodeMessage = implode($decrypteMessage);
    return $decodedMessage;
}
?>