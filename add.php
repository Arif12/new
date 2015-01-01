<?php
$fullname=$_POST['fullname'];
echo $fullname;
$hobby= $_POST['hobby'];
$hobby= implode(",",$_POST['hobby']);
echo $hobby;
$preferredjob=implode(",",['preferredjob']);
echo $preferredjob;
$link= mysqli_connect("localhost",
"root",
"lict@2",
"multiple");

var_dump($link);

//$query = "INSERT INTO `multiple`.`users` (`id`, `fullname`,`hobby`) VALUES ('NULL', '$fullnamename',$hobby')";
//mysqli_query($link, $query);
//header('location:list.php');
