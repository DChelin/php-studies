<?php

$listings = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'description' => 'We are seeking a skilled software engineer to develop 
        high-quality software solutions',
        'salary' => 8000,
        'location' => 'San Franscisco',
        'tags' => ['Software Development', 'Java', 'Python']
    ],
    [
        'id' => 2,
        'title' => 'Web Developer',
        'description' => 'We are seeking a skilled web developer to develop 
        high-quality websites',
        'salary' => 4000,
        'location' => 'Cape Town',
        'tags' => ['Elementor', 'HTML', 'CSS']
    ],
    [
        'id' => 3,
        'title' => 'Driver',
        'description' => 'We are seeking a driver to carry our cargo',
        'salary' => 1000,
        'location' => 'Durban',
        'tags' => ['Trucks', 'Freight']
    ],
    [
        'id' => 4,
        'title' => 'Graphic Designer',
        'description' => 'We are seeking a graphic designer to make great
         looking designs',
        'salary' => 3200,
        'location' => 'Johannesburg',
        'tags' => []
    ],
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Multi Dimensional Array Iteration</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Multi Dimensional Array Iteration</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <?php foreach($listings as $index => $job): ?>
        <div class="md my-4">
            <div class="
            <?php if($index % 2 === 0): ?>
            bg-blue-100
            <?php else: ?>
            bg-white
            <?php endif; ?>
            rounded-lg shadow-md">
                <div class="p-4">
                    <h2 class="text-xl font-semibold"><?= $job['title'] ?></h2>
                    <p class="text-gray-700 text-lg mt-2"><?= $job['description'] ?></p>
                    <ul class="mt-4">
                        <li class="mb-2">
                            <strong>Salary:</strong> <?= $job['salary'] ?>
                        </li>
                        <li class="mb-2">
                            <strong>Location:</strong> <?= $job['location'] ?>
                            <?php if($job['location'] === 'Durban') : ?>
                                <span class="text-xs text-white bg-blue-500 rounded-full px-2 py-1 ml-2">Local</span>
                            <?php endif; ?>
                        </li>
                        <?php if(!empty($job['tags'])): ?>
                        <li class="mb-2">
                            <strong>Tags:</strong> <?= implode(', ', $job['tags']) ?>
                        </li>
                        <li class="mb-2">
                            <strong></strong>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</body>
</html>