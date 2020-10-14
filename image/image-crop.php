<?php

$imagejpeg = imagecreatefromjpeg(__DIR__ . '/img/original.jpeg');
$imagejpeg = imagecropauto($imagejpeg, IMG_CROP_THRESHOLD, 1, 16777215);

header('Content-Type: image/jpeg');
echo imagejpeg($imagejpeg);


// for cropping image by sample use imagecopyresampled