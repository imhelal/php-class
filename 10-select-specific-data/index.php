<?php

// Load the database file
include('select.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	 <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<!-- profile card -->
<div class="flex gap-5">
<?php
	while($user = mysqli_fetch_assoc($result)){ ?>
		<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
		    <div class="flex flex-col items-center pb-10 pt-10">
		        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Bonnie image"/>
		        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?php echo $user['name']; ?></h5>
		        <span class="text-sm text-gray-500 dark:text-gray-400">
		        	<?php echo $user['email']; ?>
		        </span>
		    </div>
		</div>
	<?php }
?>
</div>


	<!-- end profile card -->
</body>
</html>