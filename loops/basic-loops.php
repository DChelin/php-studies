<?php

//Basic for loop
//for($i = 0; $i < 10; $i++){
//    echo $i . '<br/>';
//}

//Basic while loop
//$i= 0;

//while($i <10){
//    echo $i . '<br />';
//    $i++;
//}

//Basic do while loop
$b = 0;

do {
    echo $b;
    $b++;    
} while ($b < 12);




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
            <ul>
                 <?php for ($i = 0; $i <= 10; $i++) : ?> 
                    <li>Number: <?= $i ?></li>
                <?php endfor; ?>

                <?php $a = 0; while($a < 10): ?>
                    <li>Number: <?= $a ?></li>
                <?php $a ++; endwhile; ?>

                <?php $b = 0; do { ?>
                    <li>Number: <?= $b ?></li>
                <?php $b++; } while ($b < 10) ?>

            </ul>
        </div>
    </div>
</body>
</html>