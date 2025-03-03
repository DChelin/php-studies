<?php

$favouriteColor = 'black';

// $colour = isset($favouriteColour) ? $favouriteColour : 'blue';

// $color = $favouriteColor ?? 'blue';

$color =isset($favouriteColor) ? $favouriteColor : 
(isset($secondFavouriteColor) ? $secondFavouriteColor : 'green');

$color = $favouriteColor ?? $secondFavouriteColor ?? 'blue';

echo $color;
