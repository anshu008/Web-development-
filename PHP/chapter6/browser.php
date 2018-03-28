<html>
<body>
<?php
if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE")){
echo("<marquee>explorer</marquee>");
}

if(strpos($_SERVER["HTTP_USER_AGENT"],"FIREFOX")){
echo("firefox");
}
?>
</body>
</html>