<?php

 $files = glob("./uploads/*.*");
 print_r($files);
 foreach ($files as $filename) {
    echo "$filename size " . filesize($filename) . "\n";
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>ESP server</title>
</head>
<body>

<?php
foreach ($files as $value) { ?>
<img src="<?echo $value?>"> 
<?
echo "last modified: Sun Jul 17 11:49:54 2016";
echo "last modified: Sun Jul 17 11:49:54 2016";
}?>
 </body> 
 </html>