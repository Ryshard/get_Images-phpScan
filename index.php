<?php 

include ('getImages.php');

echo "ok <br />";

$images = getImages(null,'cover.jpg');



print_r($images);

