<html>
<head><title>...</title>
</head>
<body>
<h1>using one page to accept and request</h1>
<?php
if(isset($_REQUEST["flavour"]))
{
?>

your favorite flavour is
<?php
echo $_REQUEST["flavour"];
}
else
{
?>
<form method="post" >
wht is your icecream flavour?
<input name="flavour" type="text">
<br>
<br>
<input type=submit value=submit>
</form>
<?php
}
?>
</body>
</html>
