<?php

// Prompt the user to select either md5() or sha1() hashing.
echo "Select your hashing method by entering either choice (md5/sha1): ";
$hashMethod = trim(fgets(STDIN));

// Validate that the user entered the correct choice.
if ($hashMethod !== 'md5' && $hashMethod !== 'sha1') {
    echo "Invalid choice. Please choose either 'md5' or 'sha1'.\n";
    exit(1);
}

// Ask the user to enter text to be hashed.
echo "Enter text to hash: ";
$userInput = fgets(STDIN);

// Use php functions to process the user's input (trim, rtrim, and strtolower).
$cleanedInput = strtolower(trim(rtrim($userInput)));

// Hash the cleaned user input.
$hashedResult = ($hashMethod === 'md5') ? md5($cleanedInput) : sha1($cleanedInput);

// Display the hashed output.
echo "Hashed output using $hashMethod: $hashedResult\n";

?>