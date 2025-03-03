<?php

    $dayOfWeek = date('l');

    switch($dayOfWeek){
        case 'Monday':
            $message = 'Monday Blues!';
            $color = 'blue';
            break;
        case 'Tuesday':
            $message = 'At least it\'s not Monday';
            $color = 'green';
            break; 
        case 'Wedesday':
            $message = 'Hump Day!';
            $color = 'orange';
            break;  
        case 'Thursday':
            $message = 'One more day until friday!';
            $color = 'red';
            break; 
        case 'Friday':
            $message = 'TGIF!';
            $color = 'purple';
            break;
        case 'Saturday':
            $message = 'Have a nice weekend!';
            $color = 'magenta';
            break;
        case 'Sunday':
            $message = 'Have a nice weekend!';
            $color = 'magenta';
            break;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>What Day is it?</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <style>
            body{
                font-family: 'Poppins' sans-serif;
                background-color: <?= $color ?> ;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
        </style>
    </header>
    <h1><?= $message ?></h1>
</body>
</html>