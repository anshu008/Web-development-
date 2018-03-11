<html>
<head>
<title>
Reading data from list boxes
</title>
</head>
<body>
<h1>
data from list
</h1>
icecream flavour
<br>
<?php
foreach($_REQUEST["ice_cream"] as $flavour)
{
echo $flavour,"<br>";
}
?>
</body>
</html>