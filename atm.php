<?php 

// -----------------------------------------------------------------------------------------------------------------------------
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
// -----------------------------------------------------------------------------------------------------------------------------

// Step 2: ATM Functionalities
switch ($choice) {
    case 1:
        echo "\nYour current balance is: RM" . $balance . "\n";
        break;
        
    case 2:
        echo "\nEnter the amount to deposit: RM";
        $deposit = trim(fgets(STDIN));
        if (is_numeric($deposit) && $deposit > 0) {
            $balance += $deposit;
            echo "Successfully deposited RM" . $deposit . ". Your new balance is RM" . $balance . "\n";
        } else {
            echo "Invalid amount. Please enter a positive number.\n";
        }
        break;
        
    case 3:
        echo "\nEnter the amount to withdraw: RM";
        $withdraw = trim(fgets(STDIN));
        if (is_numeric($withdraw) && $withdraw > 0) {
            if ($withdraw <= $balance) {
                $balance -= $withdraw;
                echo "Successfully withdrew RM" . $withdraw . ". Your new balance is RM" . $balance . "\n";
            } else {
                echo "Insufficient balance! You have only RM" . $balance . "\n";
            }
        } else {
            echo "Invalid amount. Please enter a positive number.\n";
        }
        break;
        
    case 4:
        echo "Thank you for using our ATM! Goodbye.\n";
        exit();
    
    default:
        echo "Invalid choice. Please choose a valid option (1-4).\n";
}
// -----------------------------------------------------------------------------------------------------------------------------
// Step 3: Loop and Exit
// The while (true) loop ensures the ATM menu keeps displaying after each transaction until the user selects 4 to exit.
// When case 4 is selected, the loop breaks with the exit() function, ending the program.
}

?>