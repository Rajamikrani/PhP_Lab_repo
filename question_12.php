<?php
// Recursive function to find the length of a string
function recursiveStringLength($string) {
    // Base case: if the string is empty, its length is 0
    if ($string === "") {
        return 0;
    }
    // Recursive case: remove the first character and add 1
    return 1 + recursiveStringLength(substr($string, 1));
}
 
// Example usage
$string = "hello";
$length = recursiveStringLength($string);
echo "The length of the string \"$string\" is $length.";
?>
