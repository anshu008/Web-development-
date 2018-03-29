<html>
<head>
<title>...</title>
</head>
<body>
<h1>overriding</h1>
<?php
class Person
{
var $name;
function set_name($data)
{
$this->name=$data;
}
function get_name()
{
return $this->name;
}
}
class Friend extends Person
{
var $name;
function speak()
{
	echo$this->name, "is speaking<br>";
}
function set_name($data)
{
	$this->name =strtoupper($data);
}
}
echo"creating ur new friend...<br>";
$friend=new friend;
$friend->set_name("susan");
$friend->speak();
?>
</body>
</html>