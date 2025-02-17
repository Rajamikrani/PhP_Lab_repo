<?php
function findStringIndex($array, $string) {
    // Use array_search to find the index of the string
    $index = array_search($string, $array);
    
    // If the string is not found, array_search returns false
    if ($index === false) {
        return -1;
    }
    return $index;
}

// Example usage
$array = ["apple", "banana", "cherry", "date"];
$string = "cherry";

$result = findStringIndex($array, $string);

if ($result !== -1) {
    echo "The index of '$string' is: $result";
} else {
    echo "'$string' is not found in the array.";
}
?>
