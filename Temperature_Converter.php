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


?>