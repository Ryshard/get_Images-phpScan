<?php 
// Master Copy of a file
// size=25px
include ('getImages.php');

echo "<h1>ok</h1> <br /> <hr /> ";

$images = getImages(null,'cover.jpg');



print_r($images);

