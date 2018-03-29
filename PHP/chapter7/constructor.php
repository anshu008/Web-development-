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
$this->name=$data;
}
function set_name($data)
{
$this->name=$data;
}
function get_name()
{
return $this->name;
}
}
$anshu = new Person("Anshu");
echo"the name of ur friend is ",$anshu->get_name(),".";
?>
</body>
</html>