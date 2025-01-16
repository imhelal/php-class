<?php 
echo "<pre>";







$user_photo = $_FILES['user_photo'];

// destination
$upload_dir = 'uploads/' . time() . $user_photo['name'];

move_uploaded_file($user_photo['tmp_name'], $upload_dir);