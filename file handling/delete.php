<?php
$filename = $_POST['filename'];
if(file_exists($filename))
{
    unlink($filename);
    echo "file deleted successfully!!";
}
else 
{
    echo "file not found";
}
?>