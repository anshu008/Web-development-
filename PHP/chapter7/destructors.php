<html>
<head><title>constuctor>
</title>
<head>
<body>
<h1>constructor</h1>
<?php
class Person
{ 
var $name;
function __construct($data)
{
echo "constructing",$data, "...<br>";
$this->name=$data;
}
function set_name($data)
{
$this->name=$data;
}
function get_name()
{
return $this->name;

"<br>";
}
function __destruct()
{
echo "destructing",$this->name, "...<br>";
}
}
$anshu = new Person("Anshu");
echo"the name of ur friend is ",$anshu->get_name(),".";
?>
</body>
</html>