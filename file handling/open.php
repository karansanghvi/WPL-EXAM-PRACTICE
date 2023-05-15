<?php
$file = fopen("example.txt", "r") or die("Unable to open file!");
while(!feof($file)) {
  $line = fgets($file);
  echo $line . "<br>";
}
fclose($file);
?>
    