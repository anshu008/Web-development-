<html>
<head>
<title>class</title>
</head>
<body>
<h1>
creating an object</h1>
<?php
class Person
{
var $name;
function set_name($data)
{
$this->name =$data;
}
function get_name()
{
return $this->name;
}
}
$anshu=new person;
$anshu->set_name("anshu");
echo"the name of your friend is ",$anshu->name,".";
?>
</body>
</html>