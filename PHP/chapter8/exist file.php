<html>
<head>
<title>...</title></head>
<body>
<h1>checking a file  exists</h1>
<?php
$filename ="does not exist.txt";
if(file_exists($filename)){
$data=file($filename);
foreach($data as $no =>$line)
{
echo"line $no:",$line,"<br>";
}
}
else
{
echo"the file $filename doesn't exist";
}
?>
</body>
</html>