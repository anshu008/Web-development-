<html>
<head></head>
<body>
<h1>
radio button</h1>
you selected
<?php
if (isset($_REQUEST["radios"]))
{
echo $_REQUEST["radios"];
}
?>
</body>
</html>