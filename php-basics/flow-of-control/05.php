<?php
//Contains 3 approaches to complete task, uncomment and try it out

$userInput = readline("Insert text to convert : ");
$phoneKeyPad = '';

//Basic switch variation
for ($i = 0; $i < strlen($userInput); $i++) {
    $seperatedInput = strtolower($userInput[$i]);
    switch ($seperatedInput) {
        case 'a':
            $phoneKeyPad .= '2';
            break;
        case 'b':
            $phoneKeyPad .= '22';
            break;
        case 'c':
            $phoneKeyPad .= '222';
            break;
        case 'd':
            $phoneKeyPad .= '3';
            break;
        case 'e':
            $phoneKeyPad .= '33';
            break;
        case 'f':
            $phoneKeyPad .= '333';
            break;
        case 'g':
            $phoneKeyPad .= '4';
            break;
        case 'h':
            $phoneKeyPad .= '44';
            break;
        case 'i':
            $phoneKeyPad .= '444';
            break;
        case 'j':
            $phoneKeyPad .= '5';
            break;
        case 'k':
            $phoneKeyPad .= '55';
            break;
        case 'l':
            $phoneKeyPad .= '555';
            break;
        case 'm':
            $phoneKeyPad .= '6';
            break;
        case 'n':
            $phoneKeyPad .= '66';
            break;
        case 'o':
            $phoneKeyPad .= '666';
            break;
        case 'p':
            $phoneKeyPad .= '7';
            break;
        case 'q':
            $phoneKeyPad .= '77';
            break;
        case 'r':
            $phoneKeyPad .= '777';
            break;
        case 's':
            $phoneKeyPad .= '7777';
            break;
        case 't':
            $phoneKeyPad .= '8';
            break;
        case 'u':
            $phoneKeyPad .= '88';
            break;
        case 'v':
            $phoneKeyPad .= '888';
            break;
        case 'w':
            $phoneKeyPad .= '9';
            break;
        case 'x':
            $phoneKeyPad .= '99';
            break;
        case 'y':
            $phoneKeyPad .= '999';
            break;
        case 'z':
            $phoneKeyPad .= '9999';
            break;
        case ' ':
            $phoneKeyPad .= '0';
            break;
        default:
            $phoneKeyPad .= $seperatedInput;
            echo PHP_EOL;
    }
    if ($i < strlen($userInput) - 1) {
        $phoneKeyPad .= ' ';
    }
}
echo "To type '$userInput' on a KeyPad, you must press '$phoneKeyPad' \n";


//Normal attempt at this exercise.

/*$keyPadLetters = [
    'a' => '2',
    'b' => '22',
    'c' => '222',
    'd' => '3',
    'e' => '33',
    'f' => '333',
    'g' => '4',
    'h' => '44',
    'i' => '444',
    'j' => '5',
    'k' => '55',
    'l' => '555',
    'm' => '6',
    'n' => '66',
    'o' => '666',
    'p' => '7',
    'q' => '77',
    'r' => '777',
    's' => '7777',
    't' => '8',
    'u' => '88',
    'v' => '888',
    'w' => '9',
    'x' => '99',
    'y' => '999',
    'z' => '9999',
    ' ' => '0'
];

for ($i = 0; $i < strlen($userInput); $i++) {
    $seperatedInput = strtolower($userInput[$i]);
    if (array_key_exists($seperatedInput, $keyPadLetters)) {
        $phoneKeyPad .= $keyPadLetters[$seperatedInput];
    }
    if ($i < strlen($userInput) - 1) {
        $phoneKeyPad .= ' ';
    }
}
echo "To type '$userInput' on a KeyPad, you must press '$phoneKeyPad' ";*/


// the Insane way to do it


/*for ($i = 0; $i < strlen($userInput); $i++) {
    $seperatedInput = strtolower($userInput[$i]);

    if ($seperatedInput >= 'a' && $seperatedInput <= 'z') {
        if ($seperatedInput == 'a') {
            $phoneKeyPad .= '2';
        } elseif ($seperatedInput == 'b') {
            $phoneKeyPad .= '22';
        } elseif ($seperatedInput == 'c') {
            $phoneKeyPad .= '222';
        } elseif ($seperatedInput == 'd') {
            $phoneKeyPad .= '3';
        } elseif ($seperatedInput == 'e') {
            $phoneKeyPad .= '33';
        } elseif ($seperatedInput == 'f') {
            $phoneKeyPad .= '333';
        } elseif ($seperatedInput == 'g') {
            $phoneKeyPad .= '4';
        } elseif ($seperatedInput == 'h') {
            $phoneKeyPad .= '44';
        } elseif ($seperatedInput == 'i') {
            $phoneKeyPad .= '444';
        } elseif ($seperatedInput == 'j') {
            $phoneKeyPad .= '5';
        } elseif ($seperatedInput == 'k') {
            $phoneKeyPad .= '55';
        } elseif ($seperatedInput == 'l') {
            $phoneKeyPad .= '555';
        } elseif ($seperatedInput == 'm') {
            $phoneKeyPad .= '6';
        } elseif ($seperatedInput == 'n') {
            $phoneKeyPad .= '66';
        } elseif ($seperatedInput == 'o') {
            $phoneKeyPad .= '666';
        } elseif ($seperatedInput == 'p') {
            $phoneKeyPad .= '7';
        } elseif ($seperatedInput == 'q') {
            $phoneKeyPad .= '77';
        } elseif ($seperatedInput == 'r') {
            $phoneKeyPad .= '777';
        } elseif ($seperatedInput == 's') {
            $phoneKeyPad .= '7777';
        } elseif ($seperatedInput == 't') {
            $phoneKeyPad .= '8';
        } elseif ($seperatedInput == 'u') {
            $phoneKeyPad .= '88';
        } elseif ($seperatedInput == 'v') {
            $phoneKeyPad .= '888';
        } elseif ($seperatedInput == 'w') {
            $phoneKeyPad .= '9';
        } elseif ($seperatedInput == 'x') {
            $phoneKeyPad .= '99';
        } elseif ($seperatedInput == 'y') {
            $phoneKeyPad .= '999';
        } elseif ($seperatedInput == 'z') {
            $phoneKeyPad .= '9999';
        }
    } elseif ($seperatedInput = ' ') {
        $phoneKeyPad .= '0'; // if " " then 0
    } else {
        $phoneKeyPad .= $seperatedInput;
    }
    if ($i < strlen($userInput) - 1) {
        $phoneKeyPad .= ' ';
    }
}

echo "To type '$userInput' on a KeyPad, you must press '$phoneKeyPad' \n";*/
