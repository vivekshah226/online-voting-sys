<? php
	session_start();
	require_once("config.php");

	if($_SESSION['key'] != "AdminKey")
	{
		echo "<script> location.assign('logout.php'); </script>";
		die;
	}
?>

<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Adminpanel - Online Voting System</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    ‹div class="container-fluid">
        ‹div class="row">
    <div class="Col-12"</div>
</ div>
</body>
</html>