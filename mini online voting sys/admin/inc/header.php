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
    <div class="container-fluid">
        <div class="row bg-black text-white">
            <div class="Col-1 text-center">
                <img src="../assets/img/logo.png" alt="Logo" width="80px"/>
            </div>
            <div class="Col-11"></div>
        </div>
    </div>
</body>
</html>