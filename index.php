<?php 
// Master Copy of a file

include ('getImages.php');

echo "<h1>ok</h1> <br /> <hr />";

$images = getImages(null,'cover.jpg');

//test

print_r($images);

