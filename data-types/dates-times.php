<?php
$output = null;

/*
- 'Y' - The Year
- 'm' - The month
- 'd' - The day
- 'D' - The day of the week short name
- 'l' - The full day of the week name
- 'h' - The hour
- 'i' - The minute
- 's' -  The second
- 'a' - AM/PM
*/

//Get Year
$output = date('Y');

//Gate year with timestamp
$output = date('Y', 936345600);

//Get timestamp from strtotime
$output = date('Y', strtotime('2000-09-01'));

//Get month
$output = date('m');

//Get day 
$output = date('D');

//Get full day name 
$output = date('l');

//Get year month and day
$output = date('Y-m-d');

//Get hour 
$output = date('h');

//Get minute
$output = date('i');

//Get second
$output = date('s');

//Get am/pm
$output = date('a');

//Put it all together 
$output = date('Y-m-d h:i:s a');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Arithmetic Operators</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl front-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="conatiner mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl">
            <?= $output ?>
            </p>
        </div>
    </div> 
</body>
</html>
