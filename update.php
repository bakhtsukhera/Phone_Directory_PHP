

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


-</head>

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

<div style="width:1347px;  height:450px;   background-color:#FFFFFF;   ">

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




<?php

	$dbhost_name = "localhost";
	$database = "phone_directory";
	$username = "root";
	$password = "";
	$con = mysqli_connect("localhost", "root", "", "phone_directory");
	$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
if(isset($_GET['id']))
{
$idd = $_GET['id'];
if(isset($_POST['btn']))
{
	
	
		$na = $_POST['bb'];
		$nb = $_POST['cc'];
		$nc = $_POST['dd'];
		
		$u="UPDATE number SET name = '$na', email = '$nb', phone_no = '$nc' where id = '$idd' ";
		echo $u;
		
		mysqli_query($con,$u);
		
		header("location:account.php");
	
	}
	$qry = "SELECT * FROM number WHERE id = '$idd'";
	$result = mysqli_query($con,$qry);
	while($row = mysqli_fetch_object($result))
	{

?>
<table cellpadding="0" cellspacing="0" border="1" style="margin-top:10px;" align="center">



<tr ><th colspan="4"align="center"><center>Update Record</center></th></tr>
<tr>
<td>NAME</td>
<td>EMAIL</td>
<td>PHONE NUM</td>

<td>ACTION</td>
</tr>

 <form method="post">
   
<tr>

<td><input type="text" name="bb" value="<?php echo $row->name; ?>" /></td>
<td><input type="email" name="cc" value="<?php echo $row->email; ?>" /></td>
<td><input type="number" name="dd" value="<?php echo $row->phone_no; ?>" /></td>


<td><input type="submit" name="btn" value="update" /></td>
</tr>

    </form>
<?php 
	}
}
	?>
</table>





<style>
table {
    border-collapse: collapse;
    width: 70%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>





</div>

<!-- Body End-->
<br><br><br><br><br><br><br><br>

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