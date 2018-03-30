<html>
<head>
<title>
...</title>
</head>
<body><h1>
opening a file</h1>
<?php
$handle=fopen("file.txt","r");
if($handle)
{
echo"file opened ok.";
}
?>
</body>
</html>