<?php
// function1

function decimalnumbertoBinary($decimal)
{
    return decbin($decimal);
}

$Valuedecimal = 109;

echo "Binary: " . decimalnumbertoBinary($Valuedecimal) . "<br>";
// Function 2
function decimalToRoman($decimalNumber)
{
    if ($decimalNumber > 3999) {
        echo "Error: Number exceeds maximum allowed value (3999).";
    } else {
        $romanNumer = [
            'M'  => 1000,
            'CM' => 900,
            'D'  => 500,
            'CD' => 400,
            'C'  => 100,
            'XC' => 90,
            'L'  => 50,
            'XL' => 40,
            'X'  => 10,
            'IX' => 9,
            'V'  => 5,
            'IV' => 4,
            'I'  => 1
        ];

        $romanNumber = '';
        foreach ($romanNumer as $roman => $value) {
            $match = intval($decimalNumber / $value);
            $romanNumber .= str_repeat($roman, $match);
            $decimalNumber %= $value;
        }

        return $romanNumber;
    }
}

$decimalValue = 87;
echo "Roman: " . decimalToRoman($decimalValue) . "<br>";

echo "<hr>";
//Task 2
// Write two more PHP functions.
//  Function 3: Converts a binary number to a decimal number.
//  Function 4: Converts a roman number to a decimal number.


// Function 1
function binaryToDecimal($binaryNumber)
{
    return bindec($binaryNumber);
}

// Function 2
function romanToDecimal($romanNumber)
{
    $romanNumerals = [
        'M'  => 1000,
        'D'  => 500,
        'C'  => 100,
        'L'  => 50,
        'X'  => 10,
        'V'  => 5,
        'I'  => 1
    ];

    $decimalNumber = 0;
    $previousValue = 0;

    for ($i = strlen($romanNumber) - 1; $i >= 0; $i--) {
        $currentValue = $romanNumerals[$romanNumber[$i]];
        if ($currentValue < $previousValue) {
            $decimalNumber -= $currentValue;
        } else {
            $decimalNumber += $currentValue;
        }
        $previousValue = $currentValue;
    }

    return $decimalNumber;
}


$binaryValue = '1101101';
$romanValue = 'LXXXVII';
echo "Decimal from Binary: " . binaryToDecimal($binaryValue) . "<br>";
echo "Decimal from Roman: " . romanToDecimal($romanValue) . "<br>";
echo "<hr>";
echo "<hr>";
echo "<hr>";


// Part 3
function checkNumberType($number)
{
    if (isRomanNumber($number)) {
        echo "$number is Roman.<br>";
        convertRoman($number);
    } elseif (isBinaryNumber($number)) {
        echo "$number is Binary.<br>";
        convertBinary($number);
    } elseif (isDecimalNumber($number)) {
        echo "$number is Decimal.<br>";
        convertDecimal($number);
    } else {
        echo "$number is Invalid number format.<br>";
    }
}



// Function to check if a number is a valid to Roman , binary and decimal number
function isRomanNumber($number)
{
    return preg_match('/^(M{0,3})(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/', $number);
}


function isBinaryNumber($number)
{
    return preg_match('/^[01]+$/', $number);
}


function isDecimalNumber($number)
{
    return preg_match('/^[+-]?\d+$/', $number) && !preg_match('/^[+-]0\d/', $number);
}

// Convert Roman number to decimal and binary
// Convert Binary number to decimal and Roman
// Convert Decimal , Roman and binary
function convertRoman($number)
{
    $decimal = romanToDecimal($number);
    $binary = decimalToBinary($decimal);
    echo "Decimal: $decimal<br>";
    echo "Binary: $binary<hr>";
}

function convertBinary($number)
{
    $decimal = binaryToDecimal($number);
    $roman = decimalToRoman($decimal);
    echo "Decimal: $decimal<br>";
    echo "Roman: $roman<hr>";
}

function convertDecimal($number)
{
    $roman = decimalToRoman($number);
    $binary = decimalToBinary($number);
    echo "Roman: $roman<br>";
    echo "Binary: $binary<hr>";
}


function decimalToBinary($number)
{
    return decbin($number);
}

//  Converts decimal number to Roman number. Maximum number can be converted is 3999.
function decimalRoman($number)
{
    if ($number > 3999) {
        return "Error: The number is greater than 3999.";
    }

    $romanNumerals = [
        'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
        'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
        'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
    ];

    $result = '';
    foreach ($romanNumerals as $roman => $value) {
        while ($number >= $value) {
            $result .= $roman;
            $number -= $value;
        }
    }
    return $result;
}

// Converts binary - decimal number
function binaryDecimal($number)
{
    return bindec($number);
}

// Converts  Roman - decimal
function romanDecimal($number)
{
    $romanNumerals = [
        'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
        'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
        'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
    ];

    $result = 0;
    foreach ($romanNumerals as $roman => $value) {
        while (strpos($number, $roman) === 0) {
            $result += $value;
            $number = substr($number, strlen($roman));
        }
    }
    return $result;
}

// Test the functions
$numbers = ['10', '30', '101', '545', 'XVII', '1001', 'CMXCIX', '+20', '-0123'];

foreach ($numbers as $number) {
    checkNumberType($number);
}


echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";


// /10numbers

// Function to convert decimal number to binary recursively
function decimaltotheBinary($decimal)
{
    if ($decimal < 1) {
        return '';
    } else {
        return decimaltotheBinary(intdiv($decimal, 2)) . ($decimal % 2);
    }
}
// Function to convert decimal number to Roman numeral

function decimalToconvertRoman($decimal)
{
    // Define Roman numeral symbols and values
    $romanSymbols = array('M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I');
    $romanValues = array(1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1);


    $roman = '';

    // Convert the decimal number to Roman numeral
    for ($i = 0; $i < count($romanSymbols); $i++) {
        while ($decimal >= $romanValues[$i]) {
            $roman .= $romanSymbols[$i];
            $decimal -= $romanValues[$i];
        }
    }

    return $roman;
}


$numbers = array(10, 200, 55, 66, 83, 145, 555, 8888, 765, 83);
//  print each number in all three numbering systems

foreach ($numbers as $number) {
    // Print the decimal number
    echo "Decimal: $number<br>";

    // Convert the decimal number to binary recursively
    $binary = decimaltotheBinary($number);
    echo "Binary: $binary<br>";

    // Convert the decimal number to Roman numeral
    $roman = decimalToconvertRoman($number);
    echo "Roman: $roman<br>";

    echo "<hr>";
}
