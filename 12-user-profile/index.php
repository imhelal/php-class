<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UserList</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
</head>
<body>
	

<div class="max-w-[500px] mx-auto my-0">
	

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

        	<?php 
        		include('inc/connection.php');
        		$read_query = "SELECT * FROM users ORDER BY id DESC";
        		$read_result = mysqli_query($conn, $read_query);

        		while($user = mysqli_fetch_assoc($read_result)){ ?>

        			<tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $user['name']; ?>
                </th>
                <td class="px-6 py-4">
                    <?php echo $user['email']; ?>
                </td>
                <td class="px-6 py-4">
                    <a href="12-user-profile/profile.php?userid=<?php echo $user['id']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Visit Profile</a>
                </td>
            </tr>


        		<?php }

        	?>

            
           

        </tbody>
    </table>
</div>

</div>



</body>
</html>