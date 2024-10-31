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

while (true) {
    // Display calculator menu
    echo "\n--- Basic Calculator ---\n";
    echo "1. Add\n";
    echo "2. Subtract\n";
    echo "3. Multiply\n";
    echo "4. Divide\n";
    echo "5. Exit\n";
    
    echo "Choose an option (1-5): ";
    $choice = trim(fgets(STDIN));
    
    if ($choice == 5) {
        echo "Exiting the calculator. Goodbye!\n";
        break;
    }
?>