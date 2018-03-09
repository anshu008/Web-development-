<html>
<head>
<title>....</title>
</head>
<body>
<h1>
Usin String formatting
</h1>
<?php
printf(" i have %s pants and %s shirts.<br>",4,6);
$string =sprintf(" after the sale i have %s pants nd %s shirts .<br>",6,8);
echo $string ,"<br>";
$price =8888.992;
echo "the price is  ";
printf( $price);


echo"printf gives uu";
printf("%6.6f <br>" ,3.1);
echo"printf gives uu";
printf("%6.9f <br>" ,3.1);
echo"printf gives uu";
printf("%6.10f <br>" ,3.1);

$year =2007;
$month=9;
$day=2;
echo "the date is ";
printf("%04d-%0d-%0d<br>",$year,$month,$day);
?>
</body>
</html>
