<?php

$dude = new Imagick('C:\xampp\htdocs\Intern\base.png');

$mask = new Imagick('C:\xampp\htdocs\Intern\mask.png');

//opacity
$dude->setImageMatte(1); 

// Create composite of two images 

$dude->compositeImage($mask, Imagick::COMPOSITE_DSTIN, 0, 0);

// Write image to a file.
$dude->writeImage('C:\xampp\htdocs\Intern\newimage.png');


header("Content-Type: image/png");
echo $dude;
?>