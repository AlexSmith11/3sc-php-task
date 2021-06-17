<?php

function getUserInput() {
    $handle = fopen ("php://stdin","r");
    $line = trim(fgets($handle));
    fclose($handle);
    echo "\n";
    return $line;
}