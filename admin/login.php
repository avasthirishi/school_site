<?php
session_start();
include '../includes/db_connect.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Change these credentials as you wish
    $admin_user = 'admin';
    $admin_pass = '12345'; // You can encrypt later using password_hash()

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Invalid username or password!';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login - Nirman School</title>
	<link rel="stylesheet" href="css/admin.css">
</head>
<body class="login-page">
	<div class="login-container">
		<h2>Admin Login</h2>
		<form method="POST">
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required>
			<button type="submit">Login</button>
			<?php if ($error): ?>
				<p class="error"><?php echo $error; ?></p>
			<?php endif; ?>
		</form>
	</div>
</body>
</html>
