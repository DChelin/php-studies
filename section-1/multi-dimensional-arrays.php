<?php

$output = null;

$fruits = [
    ['Apple', 'Red'],
    ['Orange', 'Orange'],
    ['Banana', 'Yellow']
];

//Get element within the array array
$output = $fruits[0][1];

//Add an array
$fruits[] = ['Grape', 'Purple'];

//associaitive array
$users =[
    ['name' => 'John', 'email' => 'john@gmail.com', 'password' => '123456'],
    ['name' => 'Mary', 'email' => 'mary@gmail.com', 'password' => '123456'],
    ['name' => 'Ken', 'email' => 'ken@gmail.com', 'password' => '123456'],
];

//add a user
$users[] = ['name' => 'Mike', 'email' => 'mike@gmail.com', 'password' 
=> '123456'];

//add a user
array_push($users, ['name' => 'Larry', 'email' => 'larry@gmail.com', 'password' 
=> '123456'],);

//remove last item from array
array_pop($users);

array_shift($users);

//remove specific user
unset($users[0]);

$output = $users[1]['email'];

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
            <p>
                <pre> <?= print_r($users) ?> </pre>

            </p>
        </div>
    </div>
</body>
</html>