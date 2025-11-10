<?php
session_start();
include '../includes/db_connect.php';

// Redirect to login if not logged in
if (!isset($_SESSION['admin_logged_in'])) {
	header('Location: login.php');
	exit;
}

$result = $conn->query("SELECT * FROM inquiries ORDER BY submitted_at DESC");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard - Nirman School</title>
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<header class="admin-header">
		<h1>Admin Dashboard</h1>
		<a href="logout.php" class="logout-btn">Logout</a>
	</header>

	<section class="admin-content">
		<h2>Submitted Inquiries</h2>
		<?php if ($result->num_rows > 0): ?>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Class</th>
					<th>Message</th>
					<th>Date</th>
				</tr>
				<?php while ($row = $result->fetch_assoc()): ?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo htmlspecialchars($row['name']); ?></td>
						<td><?php echo htmlspecialchars($row['email']); ?></td>
						<td><?php echo htmlspecialchars($row['phone']); ?></td>
						<td><?php echo htmlspecialchars($row['class']); ?></td>
						<td><?php echo nl2br(htmlspecialchars($row['message'])); ?></td>
						<td><?php echo $row['submitted_at']; ?></td>
					</tr>
				<?php endwhile; ?>
			</table>
		<?php else: ?>
			<p>No inquiries submitted yet.</p>
		<?php endif; ?>
	</section>
</body>
</html>
