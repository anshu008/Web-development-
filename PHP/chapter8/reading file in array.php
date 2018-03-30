
<html>
<head><title>..</title>
</head>
<body>
<h1>
reading a file into array
</h1>
<?php
$data=file("aa.txt");
foreach($data as $number =>$line)
{
echo"line $number: ",$line ,"<br>";
}
?>
</body>
</html>