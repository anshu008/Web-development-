<html>
<head>
<title>...</title>
</head>
<body>
<h1>
passing variab argumentsto functions 
</h1>
<?php
echo "Passing 'how' 'are' 'things' to connector..<br>";
echo "getting this result:";
connector ("how" ,"are","things?");
function connector()
{
$data =" ";
$arguments = func_get_args();
for ($loop_index =0; $loop_index <func_num_args();$loop_index++)
{
$data .=$arguments[$loop_index] . " ";
}
echo $data;
}
?>
</body>
</html> 