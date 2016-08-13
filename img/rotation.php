<?php

$imageDir = 'banners/';

// get all images
$images = glob($imageDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// select random banner
$banner = $images[array_rand($images)];

// get filetype
$filetype = pathinfo($banner, PATHINFO_EXTENSION);

// set headers
header("Cache-Control: no-cache, must-revalidate");
header("Content-Type: image/$filetype");
header("Content-Length: " . filesize($banner));

// output image data
readfile($banner);

?>
