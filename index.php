<?php

// -----------------------------------------------------------------------------------------------------------
// Bootstrap the terminal itself.
//
// DO NOT DELETE THIS LINE.
// -----------------------------------------------------------------------------------------------------------
require_once __DIR__ . '/src/bootstrap.php';


// -----------------------------------------------------------------------------------------------------------
// Place your code below
// -----------------------------------------------------------------------------------------------------------
$possibleCodes = getAllPossible();
$codeIndex=0;
do {
    $similarities = attempt($possibleCodes [$codeIndex]);
    $attemptedCodeArray = str_split($possibleCodes[$codeIndex]);
    for($index=0;$index<count($possibleCodes);$index++) {
        $currentValue = str_split($possibleCodes[$index]);
        if($similarities==0 && ($attemptedCodeArray[0]==$currentValue[0])) {
            unset($possibleCodes[$index]);
        } else if($similarities>0){
            $diffCount = array_diff($attemptedCodeArray,$currentValue);
            if($diffCount<(5-$similarities)) {
                unset($possibleCodes[$index]);
            }
        }
    }
   $possibleCodes = array_values($possibleCodes);
   if($similarities>0)  $codeIndex+=1;
 } while ($codeIndex<count($possibleCodes));