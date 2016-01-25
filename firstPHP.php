<!DOCTYPE html>
<html>
<head>
	<title>Tets</title>
<style type="text/css">
	#frst{
		color: red;
	}
	#sec{
		color: green;
	}
</style>

</head>
<body>

<?php
header(`Content-Type:text/html;charset=utf-8`);
echo "Това е моят първи PHP тест";

$int=4;
$string="Proba 123...";

echo $string;



$first="name";
$second="222";
$tird="123ABV";

echo "<p id='frst'>".$first."</p><p id='sec'>".$second."</p><p>".$tird."</p>";




echo `$first`;
echo "$first"."-";
echo "I'v got anything";
echo '"Text v kavichki"';
?>
</body>
</html>



