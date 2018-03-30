<html>
<head>
<title>
...</title>
</head>
<body><h1>
opening a file</h1>
<?php
$handle=fopen("aa.txt","r");
while (!feof($handle))
{
$text=fgets($handle);
echo $text,"<br>";
}
fclose($handle);
?>
</body>
</html>