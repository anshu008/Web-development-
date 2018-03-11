<html>
<head>
<title>...</title>
<body>
<h1> reading the data
</h1>
you order the items: <br>
<?php
$text =$_REQUEST["data"];
echo str_replace("\n","<br>",$text);
?>
</body>
</html>