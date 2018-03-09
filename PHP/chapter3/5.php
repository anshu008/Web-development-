<html>
<head>
<title>
extracting variables from arrays</title>
</head>
<h1>extracting variables from arrays</h1><body><?php
$icecream["gd"]="orange";
$icecream["better"]="vanilla";
$icecream["best"]="butterscotch";
extract($icecream);
echo"\$gd=$gd<br>";
echo"\$better=$better<br>";
echo"\$best=$best<br>";
?>
</body>
</html>

