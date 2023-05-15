<?php

// Open the file for writing (if it doesn't exist, it will be created)
$file = fopen("example.txt", "w") or die("Unable to open file!");

// Write some text to the file
$text = "HELLO WORLD!\n";
fwrite($file, $text);

// Close the file
fclose($file);

echo "Text written to file.";

?>
