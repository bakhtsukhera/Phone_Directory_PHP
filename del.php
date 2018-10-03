
<?php require_once('session.php'); ?>

<?php 


	$dbhost_name = "localhost";
	$database = "phone_directory";
	$username = "root";
	$password = "";
	$con = mysqli_connect("localhost", "root", "", "phone_directory");
	$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);

	$id = $_GET['id'];
	
	$qq = "DELETE FROM number WHERE id ='$id'";
	mysqli_query($con,$qq);
	header("location:account.php");	
	
?>