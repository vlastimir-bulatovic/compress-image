<?php
//composer require tinify/tinify to install tinify 

set_time_limit(0);
 
require_once("vendor/autoload.php");
 
\Tinify\setKey("Here put your api key"); 
 
$dir = 'uncompressed/';
$images = scandir($dir);
$images = array_diff($images, array('.', '..'));
  
foreach ($images as $image) {
    $source = \Tinify\fromFile($dir.$image);
    $source->toFile("compressed/".$image);  //note that you can replace uncompresed images adding here $dir instead "compressed"
}
 
echo "All images are compressed.";
?>