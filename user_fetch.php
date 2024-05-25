<?php

require 'includes/connection.php';
$query = "SELECT * FROM MyUser";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/0136fe14f5.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/dashboard.css">
	<title>Document</title>
</head>

<body>
	<?php require 'includes/navbar.php'; ?>
	<div style="display: flex;">
		<div class="sidebar">
			<br>
			<a href="admin_details.php">My Profile</a>
			<br><br>
			<div style="width:80%;background-color: white;margin-left:12px;">
				<a href="user_fetch.php" style="color: black;">User</a>
			</div>
			<br>
		</div>
		<div class="user_table">
			<table>
				<thead>
					<tr>
						<th>SL No.</th>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Last Updated</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $count = 1;
					while ($row = mysqli_fetch_array($result)) { ?>

						<?php $date = strtotime($row["updated_time"]);
						$new_date = date("d-m-Y  h-i-s", $date); ?>

						<tr>
							<th><?php echo $count ?></th>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $new_date; ?></td>
							<td>

								<a onClick="deleteUser(<?php echo $row['id']; ?>)"><i  class="fas fa-trash"></i></a>
							</td>


							<script>
								function deleteUser(id) {
									if (confirm("Do you want to delete this data permanently?")) {
										window.location.href = "delete_user.php?id=" + id + "";
										return true;
									}
								}
							</script>
						</tr>
						<?php $count++; } ?>
				</tbody>
			</table>
		</div>

	</div>
</body>

</html>