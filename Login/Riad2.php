<?php
echo"****************welcome************** <br>";
echo"My First Name is:".$_POST["firstname"]."<br>";
echo"Last Name is:".$_POST["lastname"]."<br>";
echo"Email:".$_POST["mail"]."<br>";
echo"Date of birth:".$_POST["Date"]."/".$_POST["Month"]."/".$_POST["Year"]."<br>";
echo"password: ".$_POST["pass"]."<br>";
echo"Gender: ".$_POST["gender"]."<br>";
echo"Skills: ";
foreach($_POST["skills"] as $b)
{
	echo $b." ";
}
echo"<br>";
echo "Address: ".$_POST["address"]."<br>";
?>