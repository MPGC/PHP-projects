

<?php
$arch="transporte.txt";
header("Content-Disposition: attachment; filename='$arch'");
header("Content-Length: ", filesize($arch));
header("Content-Type: application/octet-stream; name='$arch'");
?>
