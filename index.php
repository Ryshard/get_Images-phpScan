<?php 
// Master Copy
include ('getImages.php');

echo "<h1>ok</h1> <br />";

$images = getImages(null,'cover.jpg');



print_r($images);

