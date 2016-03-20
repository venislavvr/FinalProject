
<?php
include_once('includes/header.php')
?>

<?php

$result=0;
$answer_wrong=0;
$answer_correct=3;


//if(!empty($POST["submit"])){
$answer=$_POST["ans1"];
if ($answer=="pos"){
	$result=$result+3;
}else{
	$result=$result+0;
}

$answer=$_POST["ans2"];
if ($answer=="pos"){
	$result=$result+3;
}else{
	$result=$result+0;
}

$answer=$_POST["ans3"];
if ($answer=="pos"){
	$result=$result+3;
}else{
	$result=$result+0;
}
echo "<p class='answer_style'>имате ".$result." точки</p>";

//}else{
	//echo "<p class='answer_style'>Нямате отбелязани отговори</p>";
//}
?>


<img src="images/smile.png" alt="smile">

<?php
include_once('includes/footer.php')
?>
