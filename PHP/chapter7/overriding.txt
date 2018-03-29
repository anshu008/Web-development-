<html>
<head>
<title>...</title>
</head>
<body>
<h1>Inheritance</h1>
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
var $msg;
function set_msg($data)
{
$this->msg=$data;
}
function speak()
{
return $this->msg;
}
}
$anshu=new friend;
$anshu->set_name("Anshu");
$anshu->set_msg("hello everyone");
echo"the name of your friend is",$anshu->get_name(),".";
echo $anshu->get_name()," ","says\"" ,$anshu->speak(),"\"<br>";
?>
</body>
</html>