<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phone Directory</title>
<link href="external css/menu header.css" type="text/css" rel="stylesheet" />

<style>



	
	.footer_arrow_hover
{
	
	width:35px; 
	
height:35px;
 background-color:transparent;
  border-radius:35px; 
  margin-left:1250px;
   margin-top:-30px; 
}
.footer_arrow_hover:hover
{
	
	background-color:#000;
  border-radius:35px; 
  margin-left:1250px;
   margin-top:-30px;
	}

	
	
	
	
	
	
	
	

</style>


</head>

<body>

<!-- MAin DIV Start-->

<div style="width:1347px; height:800px; border: solid 0px; margin-left:-7px; margin-top:-8px; ">



<!-- Header Start-->
<div  style="width:1347px; height:80px; border:solid 0px;  background-color:#FFF;
border-bottom:solid 1px #E7E7E7; position:fixed;">

<!-- logo Start-->

<div style="margin-left:130px; margin-top:30px;     float:left;" >
<a href="#" style="text-decoration:none;"><font style="color:#1BBD36; font-size:26px; font-family:Arial, Helvetica, sans-serif;">
<strong>PHONE</strong>
</font>
<font style="color:#333333; font-size:26px; font-family:Arial, Helvetica, sans-serif;"><strong>DIRECTORY</strong></font>
</a>
</div>

<!-- logo end-->



<!-- mENU START-->

<div class="menu" style="float:left; background-color:# 0F9; margin-left:600px;">
<ul>



<li><a href=""></a></li>



</ul>


</div>

<!-- MENU end-->






</div>

<!-- Header End-->




<!-- Body start-->

<div style="width:1347px;  height:600px;   background-color:#FFFFFF;   ">

<div style="width:1px; height:1px"></div>

<!-- Welcome to tinker telecome start-->

<div style="width:1347px;  height:80px;   background-color:#1BBD36; margin-top:80px; ">
<div style="margin-left:125px; ">
<font style="font-family:Arial, Helvetica, sans-serif; color:#000;
font-size:15px; line-height:94px;" ><strong>
</strong></font>
<font style="font-family:Arial, Helvetica, sans-serif; color:#FFF;
font-size:15px; line-height:94px;" ><strong>

</strong></font>
</div>
</div>



<!-- Welcome to tinker telecome end-->


<?php 




	$dbhost_name = "localhost";
	$database = "phone_directory";
	$username = "root";
	$password = "";
	$con = mysqli_connect("localhost", "root", "", "phone_directory");
	$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);



if(isset($_REQUEST['b1']))
{
	$nam = $_REQUEST['t1'];
	$nam2 = $_REQUEST['t2'];
	$nam3 = $_REQUEST['t3'];
	$nam4 = $_REQUEST['t4'];
	
	$q=" INSERT INTO signup(id,name,email,password,mobile) VALUES (NULL,'$nam','$nam2','$nam3','$nam4')";
	
	mysqli_query($con,$q);
	
	}
	

?>

<!-- register start-->
<div style="background-color:#FFF; height:450px; width:500px; margin-left:180px; margin-top:50px; float:left">

<div style=" width:px; height:80px; background-color:#FFF; margin-left:0px; margin-top:0px; line-height:80px;
border-bottom:solid 0px #EEEEEE;
border-top:solid 0px #EEEEEE;">

<font style="font-family:Arial, Helvetica, sans-serif; color:#000;
font-size:35px; ">

Register Your Account Here !

</font>
</div>
<form method="post">
<label style="font-family:Arial, Helvetica, sans-serif; color:#999;
font-size:14px; ">Name *</label><br />
<input type="text" name="t1" style=" width:440px; height:33px; border-radius:4px; border:solid 1px #555555;" required />

<br /><br />
<label style="font-family:Arial, Helvetica, sans-serif; color:#999;
font-size:14px; ">Email *</label><br />
<input type="email" name="t2" style=" width:440px; height:33px; border-radius:4px; border:solid 1px #555555;"required />

<br /><br />


<label style="font-family:Arial, Helvetica, sans-serif; color:#999;
font-size:14px; ">Password</label><br />
<input type="password" name="t3" style=" width:440px; height:33px; border-radius:4px; border:solid 1px #555555;" required/>

<br /><br />
<label style="font-family:Arial, Helvetica, sans-serif; color:#999;
font-size:14px; ">Mobile</label><br />
<input type="number" name="t4" style=" width:440px; height:33px; border-radius:4px; border:solid 1px #555555;" required/>





<br /><br />
<input type="submit" name="b1" value="Register Now" style="
 width:140px; height:40px; border-radius:4px; border:solid 1px #1BBD36; 
 font-family:Arial, Helvetica, sans-serif; color:#FFF; background-color:#1BBD36; cursor:pointer;
font-size:18px;"/>

</form>

<div>


</div>








</div>


<!-- register end-->








<!-- login start-->
<div style="background-color:#FFF; height:450px; width:500px; margin-left:90px; margin-top:50px; float:left">




<div style=" width:px; height:80px; background-color:#FFF; margin-left:0px; margin-top:0px; line-height:80px;
border-bottom:solid 0px #EEEEEE;
border-top:solid 0px #EEEEEE;">

<font style="font-family:Arial, Helvetica, sans-serif; color:#000;
font-size:35px; ">

Login Your Account Here

</font>
</div>
<?php 
session_start();
if(isset($_REQUEST['b2']))
{
$a = $_REQUEST['t2'];
$b = $_REQUEST['t3'];
$quy = "SELECT * FROM signup WHERE email  = '$a' AND password = '$b'";

	$res = mysqli_query($con,$quy);


if(mysqli_num_rows($res)>0)
{
	session_regenerate_id();
	$ses = mysqli_fetch_assoc($res);
	$_SESSION['SESS_ID'] = $ses['id'];
	$_SESSION['SESS_NAME'] = $ses['name'];
	$_SESSION['SESS_EMAIL'] = $ses['email'];
	
	session_write_close();
	
	header("location:account.php");
}
else
{
	echo "eror in login";
}
}
?>

















<form method="post" name="form1">

<label style="font-family:Arial, Helvetica, sans-serif; color:#999;
font-size:14px; ">Email *</label><br />
<input type="email" name="t2" style=" width:440px; height:33px; border-radius:4px; border:solid 1px #555555;"required />

<br /><br />


<label style="font-family:Arial, Helvetica, sans-serif; color:#999;
font-size:14px; ">Password</label><br />
<input type="password" name="t3" style=" width:440px; height:33px; border-radius:4px; border:solid 1px #555555;" required/>





<br /><br />
<input type="submit" value="Login" name="b2" style="
 width:70px; height:40px; border-radius:4px; border:solid 1px #1BBD36;  cursor:pointer;
 font-family:Arial, Helvetica, sans-serif; color:#FFF; background-color:#1BBD36;
font-size:18px;"/>


</form>
<div>


</div>



</div>


<!-- login end-->



</div>

<!-- Body End-->



<!-- Footer start-->

<div style="width:1347px;  height:120px;   background-color:#1BBD36; margin-top:89px; ">


<div style="width:10px; height:10px; background-color:# CC6;   ">

</div>


<div style="width:350px; height:50px; background-color:# 000; margin-left:170px;  margin-top:30px;  ">

<a href="#"><img src="images/1474592800_fb white.png" width="20px" height="20px" /></a>

<a href="#"><img src="images/1474592934_twitter white.png" width="20px" height="20px" style="margin-left:33px;" /></a>


<a href="#"><img src="images/1474592996_google-plus white.png" width="20px" height="20px" style="margin-left:33px;" /></a>



<a href="#"><img src="images/1474593053_Linkedin_Color white.png" width="35px" height="35px" style="margin-left:33px;" /></a>




<a href="#"><img src="images/1474593145_Youtube white.png" width="20px" height="20px" style="margin-left:33px;" /></a>

 </div>



<div style="width:300px; background-color:# 066; line-height:20px; height:25px; margin-left:850px;
margin-top:-35px;">
<font style="font-family:Arial, Helvetica, sans-serif; color:#FFF; font-size:14px;">
&copy; Developed by
</font>
<a href="http://www.desiredtechs.com/" target="_blank" style="text-decoration:none">
<font style="font-family:Arial, Helvetica, sans-serif; color:#000; font-size:12px;">
Bakht Jamal Sukhera
</font></a>
<font style="font-family:Arial, Helvetica, sans-serif; color:#FFF; font-size:14px;">
.
</font>

</div>






<div class="footer_arrow_hover">
<a href="#"><img src="images/back.png" height="20px" width="20px" style="margin:7px" /></a>
</div>



</div>
<!-- Footer end-->












</div>

<!-- MAin DIV End-->


</body>

</html>