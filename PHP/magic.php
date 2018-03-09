<?php
echo"<h3> Example for __LINE__</h3>";
echo "You r at line no ". __LINE__ ."
<br>
<br>";
echo"<h3>exmple of __FILE__</h3>";
echo     __FILE__ ."
<br>
<br>";
echo"<h3>example of __DIR__</h3>";
echo  __DIR__ ."
<br>
<br>";
echo"<h3> exmple of __FUNCTION__</h3>";
function hello(){
echo"the function name is". __FUNCTION__ ."	
<br>
<br>";
}
hello();
?>