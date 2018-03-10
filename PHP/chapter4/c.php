<html>
<head>
<title>...</title>
</head>
<body>
<h1>
passing arrray to the functions
</h1>
<?php
$scores=array(65,67,25,98,57);
averager($scores);
function averager($array)
{
$total=0;
foreach ($array as $value)
{
$total+= $value;
}
if (count($array)>0)
{
echo "the average was ",$total/count($array);}
else
{
echo"no elements to average!";
}
}
?>
</body>
</html
