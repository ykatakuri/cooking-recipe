<?php

$monfichier = fopen('counter.txt', 'r+');
 
$pages_vues = fgets($monfichier); // Read the first line(number of viewed pages)
$pages_vues += 1;
fseek($monfichier, 0); // Put cursor at the file beginning
fputs($monfichier, $pages_vues); // Update number of viewed pages
 
fclose($monfichier);
 
echo('<p class="d-flex justify-content-center">Cette page a été vue ' . $pages_vues . ' fois !</p>');
?>