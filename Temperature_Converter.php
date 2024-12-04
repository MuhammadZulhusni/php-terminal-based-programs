<?php 
// Function to convert Celsius to Fahrenheit
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

// Function to convert Celsius to Kelvin
function celsiusToKelvin($celsius) {
    return $celsius + 273.15;
}

// Function to convert Fahrenheit to Celsius
function fahrenheitToCelsius($fahrenheit) {
    return ($fahrenheit - 32) * 5/9;
}

// Function to convert Fahrenheit to Kelvin
function fahrenheitToKelvin($fahrenheit) {
    return ($fahrenheit - 32) * 5/9 + 273.15;
}

// Function to convert Kelvin to Celsius
function kelvinToCelsius($kelvin) {
    return $kelvin - 273.15;
}

// Function to convert Kelvin to Fahrenheit
function kelvinToFahrenheit($kelvin) {
    return ($kelvin - 273.15) * 9/5 + 32;
}

while (true) {
    // Display menu
    echo "\n--- Temperature Converter ---\n";
    echo "1. Celsius to Fahrenheit and Kelvin\n";
    echo "2. Fahrenheit to Celsius and Kelvin\n";
    echo "3. Kelvin to Celsius and Fahrenheit\n";
    echo "4. Exit\n";
    
    echo "Choose an option (1-4): ";
    $choice = trim(fgets(STDIN));
    
    if ($choice == 4) {
        echo "Exiting the converter. Goodbye!\n";
        break;
    }

    // Get the temperature value from the user
    echo "Enter the temperature value to convert: ";
    $temperature = trim(fgets(STDIN));
    
    if (!is_numeric($temperature)) {
        echo "Invalid input. Please enter a valid number.\n";
        continue;
    }
    
?>