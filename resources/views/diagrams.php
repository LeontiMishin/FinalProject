<?php
$imageWidth = 400;
$imageHeight = 300;
$image = imagecreate($imageWidth, $imageHeight);

$bgColor = imagecolorallocate($image, 255, 255, 255);
$barColor = imagecolorallocate($image, 0, 0, 255);

$data = [50, 80, 120, 200];

$barWidth = 50;
$spacing = 20;
$x = 50;
for ($i = 0; $i < count($data); $i++) {
    $barHeight = $data[$i];
    imagefilledrectangle($image, $x, $imageHeight - $barHeight, $x + $barWidth, $imageHeight, $barColor);
    $x += $barWidth + $spacing;
}

header('Content-type: image/png');
imagepng($image);

imagedestroy($image);
?>
