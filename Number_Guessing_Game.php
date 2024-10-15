<?php 
// Welcome message
echo "Welcome to the Number Guessing Game!\n";
echo "I have picked a random number between 1 and 100.\n";
echo "Can you guess what it is?\n";

// Generate a random number between 1 and 100
$randomNumber = rand(1, 100);
$attempts = 0;

while (true) {
    echo "Enter your guess: ";
    
    // Get user input
    $guess = trim(fgets(STDIN));
    
    // Increase attempt count
    $attempts++;

    // Check if the input is a valid number
    if (!is_numeric($guess)) {
        echo "Please enter a valid number.\n";
        continue;
    }

    // Convert guess to an integer
    $guess = (int)$guess;

    // Check if the guess is correct
    if ($guess === $randomNumber) {
        echo "Congratulations! You guessed the number correctly.\n";
        echo "It took you $attempts attempts to guess the number.\n";
        break;
    } elseif ($guess < $randomNumber) {
        echo "Too low! Try again.\n";
    } else {
        echo "Too high! Try again.\n";
    }
}
?>