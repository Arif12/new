<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';
$fullname=$_POST['fullname'];
//print_r($fullname);
//$hobby= $_POST['hobby'];
$hobby='';

if (array_key_exists('hobby_reading',$_POST) && !empty ($_POST['hobby_reading'])) {
    $hobby.= $hobby_reading.',';
}

if (array_key_exists('hobby_travel',$_POST) && !empty ($_POST['hobby_travel'])) {
     $hobby.= $_POST['hobby_travel'] .',';
}

if (array_key_exists('hobby_movie',$_POST) && !empty ($_POST['hobby_movie'])){
    $hobby.= $_POST['hobby_movie'].',';
}

if(array_key_exists('hobby_cric',$_POST) && !empty($_POST['hobby_cric'])) {
    $hobby.= $_POST['hobby_cric'].',';
}
$hobby=substr($hobby,0,-1);
echo $hobby;
echo "<br/>";
$food= implode(",",$_POST['food']);
echo $food;
echo "<br/>";
$preferredjob=implode(",",$_POST['cities']);
echo $preferredjob;
$link= mysqli_connect("localhost",
"root",
"lict@2",
"multiple");


$query = "INSERT INTO `multiple`.`users` (`id`, `fullname`, `hobby`, `food`, `preferredjob`, `created`, `modified`) VALUES (NULL, '$fullname', '$hobby', '$food', '$preferredjob', '', '')";;
mysqli_query($link, $query);
//header('location:list.php');
?>
