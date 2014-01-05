<?php
$file="2014 Game Manual - Revision B.pdf"
header("Content-disposition: attachment; filename=2014 Game Manual - Revision B.pdf");
header("Content-type: application/pdf");
readfile("2014 Game Manual - Revision B.pdf");
header('Content-Length: ' . filesize($file));
?>