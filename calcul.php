<?php
include 'calculatrice.php';

$a = $_POST['a'];
$b = $_POST['b'];
$operation = $_POST['operation'];

switch ($operation) {
    case 'addition':
        $resultat = addition($a, $b);
        break;
    case 'soustraction':
        $resultat = soustraction($a, $b);
        break;
    case 'multiplication':
        $resultat = multiplication($a, $b);
        break;
    case 'division':
        $resultat = division($a, $b);
        break;
    default:
        throw new Exception("invalid operation");
}

echo "Le résultat de $a $operation $b est : $resultat";
?>
