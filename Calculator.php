<?php 
// Function to perform addition
function add($a, $b) {
    return $a + $b;
}

// Function to perform subtraction
function subtract($a, $b) {
    return $a - $b;
}

// Function to perform multiplication
function multiply($a, $b) {
    return $a * $b;
}

// Function to perform division
function divide($a, $b) {
    if ($b == 0) {
        return "Error! Division by zero.";
    }
    return $a / $b;
}
?>