<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
$txt = "Quoc Nhan\n";
fwrite($myfile, $txt);
$txt = "C0722G1\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
