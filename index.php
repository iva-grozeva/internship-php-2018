<?php

// -----------------------------------------------------------------------------------------------------------
// Bootstrap the terminal itself.
//
// DO NOT DELETE THIS LINE.
// -----------------------------------------------------------------------------------------------------------
require_once __DIR__ . '/src/bootstrap.php';

// -----------------------------------------------------------------------------------------------------------
// Welcome to Flat Rock Technology terminal.
//
// The terminal API is very simple and expose just two function:
//
// - getAllPossible(): array
//      Returns a flat array with all possible pass-codes
//
// - attempt(string $password): int
//      Attempts to unlock the terminal via the passed pass-code.
//      If the pass-code is the right one, the terminal will be unlocked and the script will be terminated.
//      If the pass-code is wrong, the function will return an index of similarity.
//      If the attempts are exhausted, the terminal will be blocked and the script will be terminated.
//
//
// You can run the terminal by running `php index.php`
//
// -----------------------------------------------------------------------------------------------------------


// -----------------------------------------------------------------------------------------------------------
// Place your code below:
// -----------------------------------------------------------------------------------------------------------

// -----------------------------------------------------------------------------------------------------------
// The following is an example code showing how to use the terminal API.
//
// Please, delete it
// -----------------------------------------------------------------------------------------------------------
$possibleCodes = getAllPossible();

// Guess the code
$possibleCode = myAwesomeCrackingFunction($possibleCode);

// Try it
$similarity = attempt($possibleCode);

// Adjust the cracking algorithm
// ...
// ...

// -----------------------------------------------------------------------------------------------------------
// End of example
// -----------------------------------------------------------------------------------------------------------