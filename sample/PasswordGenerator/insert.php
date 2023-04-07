<html>
<head>
<title>Page Title</title>
</head>
<body>

	<?php

	$conn = mysqli_connect("localhost","root","","babu");

	$name=$_POST['name'];
	$email=$_POST['email'];
	$cont=$_POST['cont'];
	$msg=$_POST['msg'];

	$sql="INSERT INTO `contact`(`name`, `email`, `contact`, `msg`) VALUES ('$name','$email','$cont','$msg')";
	$result=mysqli_query($conn,$sql);
	 ?>

</body>
</html>