<?php

$output = null;

$user = [
    'name' => 'Dev',
    'email' => 'devlynchelin6@gmail.com',
    'passowrd' => '1234',
    'hobbies' => ['Jiu-Jitsu', 'Surfing', 'Programming', 'Video Games']

];

$output = $user['name'];
$output = $user['email'];
//getting an item inside of an an array at the first index
$output = $user['hobbies'][0];

//adding an address key with value
$user['address'] = '123 Main Street';

//remove address
unset($user['address']);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Associciative Arrays</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Associciative Arrays</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">User Array:</h2>
            <p>
                <pre>
                    <?php print_r($user) ?>
                </pre>
            </p>
        </div>
    </div>
</body>
</html>