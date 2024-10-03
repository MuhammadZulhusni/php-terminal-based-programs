<?php 

// --------------------------------------------------------------------------------------------------------------------------------------------------------
// Step 1 - Intial setup

$balance = 2000;

// while (true): This creates an infinite loop, meaning the menu will keep displaying until the user chooses to exit the program.
while(true) {
    // Display ATM menu to user
    echo "\n----- WELCOME TO ATM CIMB -----\n";
    echo "\n";
    echo "What are you looking for?\n";
    echo "\n";
    echo "1. Check balance.\n";
    echo "2. Check Deposit Money.\n";
    echo "3. Withdraw Money.\n";
    echo "4. Exit";
    echo "\n";
    echo "\n-------------------------------\n";
    echo "Choose an option: ";
    $choice = trim(fgets(STDIN));
    // fgets(STDIN): Reads user input from the terminal (CLI). 
    // The trim() function is used to remove any extra spaces or newline characters from the input.
// --------------------------------------------------------------------------------------------------------------------------------------------------------

}

?>