<?php
require 'conn.php';
if(isset($_POST['signup_btn'])){
	$name=$_POST['uname'];
	$pwd=$_POST['password'];
	$email=$_POST['email'];

$sql = "INSERT INTO signup (name,password,email) VALUES ('$name','$pwd','$email')";
$result = $conn->query($sql);

?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<script type="text/javascript">
	alert("Data Inserted");
	</script>
</body>
</html>
<?php
}
mysqli_close($conn);
?>