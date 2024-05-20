<?php
// Define the original string
$originalString = "Hello, World!";

// Display the original string
echo "Original String: $originalString<br>";

// Get the length of the string
$stringLength = strlen($originalString);
echo "Length of the string: $stringLength<br>";

// Convert the string to uppercase
$upperCaseString = strtoupper($originalString);
echo "Uppercase String: $upperCaseString<br>";

// Convert the string to lowercase
$lowerCaseString = strtolower($originalString);
echo "Lowercase String: $lowerCaseString<br>";

// Reverse the string
$reversedString = strrev($originalString);
echo "Reversed String: $reversedString<br>";

// Replace "World" with "PHP"
$replacedString = str_replace("World", "PHP", $originalString);
echo "String after replacement: $replacedString<br>";

// Find the position of the word "World"
$position = strpos($originalString, "World");
echo "Position of 'World' in the original string: $position<br>";

// Find the position of the last occurrence of the word "World"
$originalStringWithDuplicate = "Hello, World! World!";
$lastPosition = strrpos($originalStringWithDuplicate, "World");
echo "Position of the last occurrence of 'World': $lastPosition<br>";

// Extract a substring starting from position 7 with a length of 5 characters
$substring = substr($originalString, 7, 5);
echo "Extracted Substring: $substring<br>";

// Find the first occurrence of "World" and return the rest of the string
$firstOccurrence = strstr($originalString, "World");
echo "First occurrence of 'World' and the rest of the string: $firstOccurrence<br>";

// Find the first occurrence of "o" from the end and return the rest of the string
$firstOccurrenceFromEnd = strrchr($originalString, "o");
echo "First occurrence of 'o' from the end and the rest of the string: $firstOccurrenceFromEnd<br>";

// Split the string by commas
$splitString = explode(",", $originalString);
echo "Splitting the string by commas:<br>";
foreach ($splitString as $part) {
    echo $part . "<br>";
}

// Join the array elements into a string with a dash
$joinedString = implode("-", $splitString);
echo "Joined string with dashes: $joinedString<br>";
?>
