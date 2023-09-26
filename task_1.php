<?php
// Task 1: String Manipulation

    $text = "The quick brown fox jumps over the lazy dog.";
    $lowerCase = strtolower($text);
    echo $lowerCase;

    echo "<br>";

    $text = "The quick brown fox jumps over the lazy dog.";
    $replaceText = str_replace('brown','red', $text);
    echo $replaceText;
    echo "<br>";
?>