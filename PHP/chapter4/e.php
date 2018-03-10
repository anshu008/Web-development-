<html>
<head>
<title>
...</title>
</head>
<h1>
returning the list from functions</h1>
<?php
list ($first,$second,$third) =create_list(3);
echo "here is the first list:<br>";
echo "$first,$second,$third <br>";

list($first,$second,$third,$fourth)= create_list(4);
echo "here is the second list:<br>";
echo "$first,$second,$third,$fourth <br>";
function create_list ($number)
{
for ($loop_counter =0; $loop_counter < $number; $loop_counter++)
{
$array[] = $loop_counter;
}
return $array;
}
?>
</body>
</html>

