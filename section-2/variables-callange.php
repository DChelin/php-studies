<?php

$title = 'Intoduction to PHP';
$author = 'Dev Chelin';
$body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do 
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
        minim veniam, quis nostrud exercitation ullamco.';
$pageTitle = 'Dev\'s PHP Blog | ' . $title;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, 
    initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $pageTitle ?></title>
</head>

<body>
    <main>
        <h1><?= $title ?></h1>
        <p>By: <?= $author ?></p>
        <p><?= $body ?></p>
    </main>
    
    
</body>
</html>