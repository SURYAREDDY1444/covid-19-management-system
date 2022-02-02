<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>

    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>

    <?php echo "<h1> Welcome ".$_SESSION['username']." To Dashboard </h1>" ?>
<a href="convex.html"><button type = "submit">SELF ANALYSIS</button></a>
		
	<form action="https://www.mohfw.gov.in/">
		<button type="submit">COVID CASES</button>
	</form>
    <h2><a href="logout.php">Logout</a></h2>
    

</body>
</html>