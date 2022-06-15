<?php
$isPost=false;
$First_Name="";
$Last_Name="";
$E_mail="";
$Tel_No="";
$password="";
$dob="";
$Address="";
$Gender="";
$Skills="";


if(isset($_POST["btnRes"]))
{
	$isPost=true;
	if($_POST["firstname"]!="")
		$First_Name=$_POST["firstname"];
	
	
	if($_POST["lastname"]!="")
		$Last_Name=$_POST["lastname"];
	
	if($_POST["mail"]!="")
		$E_mail=$_POST["mail"];
	
	if($_POST["telno"]!="")
		$Tel_No=$_POST["telno"];
	
	if($_POST["pass"]!="")
		$password=$_POST["pass"];
	
	if($_POST["gender"]!="")
		$gender=$_POST["gender"];
	
		
	if($_POST["dob"]!="")
		$dob=$_POST["dob"];
	
	if($_POST["Address"]!="")
		$Address=$_POST["Address"];
	
	if($_POST["Skills"]!="")
		$Skills=$_POST["Skills"];
	
	
}
?>
<form action="file2.php" method="post">
FirstName:<input type="text" id="firstname" name="firstname">
<?php
if($isPost==true && $First_Name=="")
 echo "<span style='color:red;'>Required</span><br><br>";
?>




LastName:<input type="text" id="lastname" name="lastname">
<?php
if($isPost==true && $Last_Name=="")
 echo "<span style='color:red;'>Required</span><br><br>";

?>
<br><br>



Password :<input type="password" id="pass" name="pass"><br><br>

<?php
if($isPost==true && $password=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>

Telephone:<input type="text" id="dob" name="telno"><br><br>
<?php
if($isPost==true && $Tel_No=="")
 echo "<span style='color:red;'>Required</span>";

?>
<br><br>

Email   :<input type="text" id="mail" name="mail"><br><br>

<?php
if($isPost==true && $E_mail=="")
 echo "<span style='color:red;'>Required</span>";

?>

<br><br>



DOB:<select name="Date">
<option value="Date">Date</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>

</select>



<select name="Month">
<option value="Month">Month</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>

<select name="Year">
<option value="Year">Year</option>
<option value="2010">1996</option>
<option value="2010">1997</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2010">2011</option>
<option value="2010">2012</option>
<option value="2010">2013</option>
<option value="2010">2014</option>
<option value="2010">2015</option>
<option value="2010">2016</option>
<option value="2010">2017</option>
<option value="2010">2018</option>
<option value="2010">2019</option>
<option value="2010">2020</option>
<option value="2010">2021</option>
<option value="2010">2022</option>

</select><br><br>

<?php
if($isPost==true && $dob=="")
 echo "<span style='color:red;'>Required</span>";

?>
<br><br>



<br><br>
Address:<textarea name="address" rowspan="3" colspan="30"></textarea>
<br><br>
<?php
if($isPost==true && $Address=="")
 echo "<span style='color:red;'>Required</span><br><br>";
?>
<br><br>

Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others<br><br>

<?php
if($isPost==true && $gender=="")
echo "<span style='color:red;'>Required</span>";

?>
<br><br>

Skills:<input type="checkbox" name="skills[]" value="C">C
<input type="checkbox" name="skills[]" value="C++">C++
<input type="checkbox" name="skills[]" value="C#">C#
<input type="checkbox" name="skills[]" value="Python">Python
<br><br>

<?php
if($isPost==true && $Skills=="")
echo "<span style='color:red;'>Required</span>";

?>


<input type="submit" value="Register" name="btnRes">

</form>