<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="sv-SE" xml:lang="sv-SE" xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>skickaPHP</title>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<link rel="stylesheet" href="styleSheet.css" type="text/css" />

<?php

$filename = 'skickahit.txt';
$somecontent = $_GET["results"];

$file = fopen($filename, 'w');
fwrite($file, $somecontent);
fclose($file);



?>

</head>
</body>
</html>