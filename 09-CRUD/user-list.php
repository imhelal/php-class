<?php 
// Database connection
$host = 'localhost';
$db_user = 'root';
$db_password = 'password';
$db_name = 'crud';

$connection = mysqli_connect($host, $db_user, $db_password, $db_name);

// select query
$sql = "SELECT * FROM users";
$result = mysqli_query($connection, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User List</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	
<div class="relative overflow-x-auto max-w-[500px] m-auto mt-5">
	<h1 class="text-center text-xl font-bold mb-3">User List</h1>
	<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
		<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
			<tr>
				<th scope="col" class="px-6 py-3">ID</th>
				<th scope="col" class="px-6 py-3">Name</th>
				<th scope="col" class="px-6 py-3">Email</th>
				<th scope="col" class="px-6 py-3">Password</th>
			</tr>
		</thead>
		<tbody>
			<?php 

				while($user_arr = mysqli_fetch_assoc($result)) { ?>

				<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
					<td class="px-6 py-4"><?php echo $user_arr['id']; ?></td>
					<td  class="px-6 py-4"><?php echo $user_arr['name'] ?></td>
					<td class="px-6 py-4"><?php echo $user_arr['email'] ?></td>
					<td class="px-6 py-4"><?php echo $user_arr['password'] ?></td>
				</tr>


				<?php }

			?>
			
		</tbody>
	</table>
</div>

</body>
</html>