<?php
$root = $_SERVER['DOCUMENT_ROOT'] . '/webroot';
$path = '/img/tm-07/hero/slider/';

$files = glob($root . $path . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);
$sorted_files=array();
foreach ($files as $file) {
    $sorted_files[$file] = $file;
}
sort($sorted_files);
foreach ($sorted_files as $image) {    
    $image = preg_replace('/^' . preg_quote($root, '/') . '/', '', $image);
    echo '<div class="item" style="background-image: url('. $image .');"></div>';
}
?>