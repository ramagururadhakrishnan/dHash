<?php 
include 'dhash.php';

$hash1 = dhash('images/forest-copyright.jpg');
$hash2 = dhash('images/forest-high.jpg');

echo $hash1;
echo $hash2;

$distance = dhash_distance($hash1, $hash2);
echo $distance;

?>

