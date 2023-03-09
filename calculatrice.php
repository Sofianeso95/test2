<?php
function addition($a, $b) {
    return $a + $b;
}

function soustraction($a, $b) {
    return $a - $b;
}

function multiplication($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        throw new Exception("division by zero");
    }
    return $a / $b;
}
?>
