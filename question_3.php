<?php
function minutesToSeconds($minutes){
    return $minutes * 60;
}
$minutes = 5;
$seconds = minutesToSeconds($minutes);
echo "$minutes minutes is equals to $seconds seconds.";
?>