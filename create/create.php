
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Become a TOURBUDDY</title>
	<link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<?php
include_once 'UserRepository.php';
$userRepository = new UserRepository();
//$users = $userRepository->findAll();
?>

<div class="container">
		<h1>Become a Tourbuddy</h1>
		<p>Create an account to start sharing your experience with the world .</p>
		<form action="addUser.php" method="post">
			<label for="username">Username</label>
			<input type="text" id="username" name="username" required>
  			<br><br>
			<label for="email">Email</label>
			<input type="email" id="email" name="email" required>
  			<br><br>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required>
  			<br><br>
			<button type="submit">Sign up </button>
		</form>
		<p>Already have an account? <a href="#">Log in</a></p>
	</div>
</body>
</html>
