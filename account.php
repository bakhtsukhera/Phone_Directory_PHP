

<?php require_once('session.php'); ?>

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

<div style="width:1347px; height:00px; border: solid 0px; margin-left:-7px; margin-top:-8px; ">



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



<li><a href="logout.php">LOGOUT</a></li>



</ul>


</div>

<!-- MENU end-->






</div>

<!-- Header End-->





<!-- Body start-->

<div style="width:1347px;  height:450px;   background-color:# 1F0528;   ">

<div style="width:1px; height:1px"></div>

<!-- Welcome to tinker telecome start-->

<div style="width:1347px;  height:80px;   background-color:#1BBD36; margin-top:80px; ">
<div style="margin-left:125px; ">
<font style="font-family:Arial, Helvetica, sans-serif; color:#000;
font-size:15px; line-height:94px;" ><strong>
 
					<h4>Welcome <font color="white" font-size="30px"><?php echo $_SESSION['SESS_NAME']; ?></font></h4>
				

</strong></font>
<font style="font-family:Arial, Helvetica, sans-serif; color:#FFF;
font-size:15px; line-height:94px;" ><strong>

</strong></font>
</div>
</div>



<!-- Welcome to tinker telecome end-->


<div style="width:747px;  height:370px;   background-color:# 1BBD36; margin-top:0px; float:left  ">

<?php


	$dbhost_name = "localhost";
	$database = "phone_directory";
	$username = "root";
	$password = "";
	$con = mysqli_connect("localhost", "root", "", "phone_directory");
	$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
	
	if(isset($_POST['btn']))
	{
		$i=$_SESSION['SESS_ID'];
	$name=$_POST['t1'];
	$ema=$_POST['t2'];
	$pno=$_POST['t3'];
	$qry = "INSERT INTO number(id,signup_id,name,email,phone_no)VALUES(NULL,'$i','$name','$ema','$pno')";
	mysqli_query($con,$qry);
	
	
	
	}
?>


<div style="margin-left:650px"><a href="">&nbsp;</a></div>
<form name="f1" method="post" align="center">

   <input type="text" name="t1" placeholder="name" />
   
   <input type="email" name="t2" placeholder="Email" />
   
   <input type="number" name="t3" placeholder="Phone No" />
   
   
<input type="submit" name="btn" value="ADD CONTACT" />

</form>






<hr>

<style>
table {
    border-collapse: collapse;
    width: 70%;
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

<font style="font-family:Arial, Helvetica, sans-serif; color:#000;
font-size:15px; line-height:94px;" ><strong>
 
					<h1><center>Phone Book</center></h1>
				

</strong></font>
<table border="1 " cellpadding="0" cellspacing="0" align="center">
<tr>
<td>ID</td>
<td>NAME</td>
<td>Email</td>
<td>Phone Num</td>
<td align="center">Action</td>

</tr>
<?php
$i=$_SESSION['SESS_ID'];
$q = "SELECT * FROM number where signup_id = '$i' ";
	$res = mysqli_query($con,$q);
	while($row = mysqli_fetch_object($res))
	{
 ?>

<tr  align="center">

<td><?php echo $row->id;  ?></td>
<td><?php echo $row->name; ?></td>
<td><?php echo $row->email; ?></td>
<td align="center"><?php echo $row->phone_no; ?></td>
<td  text-align="center">
			<a onclick="return confirm('Are u sure to delete')"  href="del.php?id=<?php echo $row->id; ?>">
												
													<span class="label label-table label-danger"><img src="images/del.png" width="20px" height="20px"/></span></a>
													<a href="update.php?id=<?php echo $row->id; ?>">
													
													<span  class="label label-table label-primary">
													<img src="images/edit.png" width="20px" height="20px"/></span></a>
													<a href="share.php?id=<?php echo $row->id; ?>">
													
													<span  class="label label-table label-primary">
													share</span></a>
												</td>

												
												
												
												

</tr>
<?php
}
 ?>
</table>

</div>



<div style="width:600px;  height:370px;   background-color:# 92F100; margin-top:40px; float:left ">

<hr>
<style>
table {
    border-collapse: collapse;
    width: 70%;
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

<font style="font-family:Arial, Helvetica, sans-serif; color:#000;
font-size:15px; line-height:94px;" ><strong>
 
					<h1><center>Shared Contacts</center></h1>
				

</strong></font>
<table border="1 " cellpadding="0" cellspacing="0" align="center">
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Phone Num</td>
<td>Sender-NAME</td>
<td align="center">Action</td>

</tr>
<?php
$ik=$_SESSION['SESS_ID'];
$q56 = "SELECT * FROM share where receiver_id = '$ik' ";
	$rest = mysqli_query($con,$q56);
	while($row = mysqli_fetch_object($rest))
	{
 ?>

<tr  align="center">

<td><?php echo $row->id;  ?></td>
<td><?php echo $row->name; ?></td>
<td><?php echo $row->email; ?></td>
<td align="center"><?php echo $row->phone_no; ?></td>
<td align="center"><?php echo $row->sender_name; ?></td>
<td  text-align="center">
			<a onclick="return confirm('Are u sure to delete')"  href="del_share.php?id=<?php echo $row->id; ?>">
												
													<span class="label label-table label-danger"><img src="images/del.png" width="20px" height="20px"/></span></a>
												</td>

												
												
												
												

</tr>
<?php
}
 ?>
</table>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>
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
</div>
<!-- MAin DIV End-->


</body>

</html>