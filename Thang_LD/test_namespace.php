<?php
include 'namespace.php';
$nsp_circle = new Shape\circle();
$nsp_square	= new Shape\square();
$nsp_rectangle = new Shape\rectangle();
$nsp_circle -> info_circle(4);
echo "<br><br>"."########"."<br><br>";
$nsp_square -> info_square(4);
echo "<br><br>"."########"."<br><br>";
$nsp_rectangle -> info_rectangle(4,6);
?>