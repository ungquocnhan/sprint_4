<?php
/*
 * Demo string length strlen()
 */
echo strlen("Hello world!");
echo "<br>";

/*
 * Demo count word in string  str_word_count()
 */
echo str_word_count("Hello world!");
echo "<br>";

/*
 * Demo reverse string  strrev()
 */
echo strrev("Hello world!");
echo "<br>";

/*
 * Demo find a text in string  strpos()
 */
echo strpos("Hello world!", "world");
echo "<br>";
$string = "The quick brown fox jumps over the lazy dog.";
$substring = "nhan";
$position = strpos($string, $substring);
if ($position === false) {
    echo "The substring was not found in the string.";
} else {
    echo "The substring was found at position " . $position . ".";
}
echo "<br>";

/*
 * Demo Replace Text Within a String  str_replace()
 */
echo str_replace("world", "Dolly", "Hello world!");
echo "<br>";