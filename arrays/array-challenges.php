<?php

/*Challenge 1: Sum of an array

1. Create an array of numbers
2. Get the sum of all the numbers combined and put into a variable.
3. Get the amount of numbers in the array and put into a variable.
4. Print out 'The sum of the {amount} numbers is {sum} '. For 
example, if the array is [1,2,3,4,5], the output should be 'The sum of the 5
numbers is: 15.

*/

echo '<h3>Sum of an array: </h3>';

$numbers = [2, 7, 5, 15, 23, 80];
$sum = array_sum($numbers);
$amount = count($numbers);

$final = 'Sum of the ' . $amount . ' numbers is ' . $sum;

print_r($final);

/* Challenge 2: Colours array

1. Reverse the '$colors' array.
2. Add 'purple and 'orange' to the end of the array.
3. Replace the second color with 'pink'
4. Remove the last eleemnt of the array.

You should end up with the following array : ['Yellow', 'Pink', 'Blue',
'Red', 'Purple']
*/

/* My attempt */ 
echo '<h3>Colours array: </h3>';

$colours = ['Yellow', 'Black', 'Blue'];

// print_r(array_reverse($colours));

$colours [] = ['Purple', 'Orange'];

array_splice($colours, 1, 1, 'Pink');

array_pop($colours);

// print_r($colours);

/* Instructors attempt */

echo '<h3>Colours array: </h3>';

$colours = ['Red', 'Blue', 'Green', 'Yellow'];
$colours = array_reverse($colours);
//array_push($colours, 'Purple', 'Orange');

//Using Array Merge
$colours = array_merge($colours, ['Purple', 'Orange']);
array_splice($colours, 1,1, 'Pink');
array_pop($colours);

// print_r($colours);

/**
 * Challenge 3: Job Listings array
 * 
 * 1. Create a multi dimensional array of associatie arrays of 3 job listings 
 * with the fields id, job_title, company, contact_email, and contact_phone.
 * Also add an array field for skills. The skills array should be an array of 
 * strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript',
 * 'HTML', 'CSS', etc.
 * 2. Create a new listing using the 'array_push()' function. The new listing should
 * have the same fields as the others.
 * 3. Print out the job_title of the second job listing in the array.
 * 4. Print out the first skill of the third job listin in the array.
 */

 
echo '<h3>Job Listings: </h3>';

$jobListings = [
    [
        'id' => '1', 
        'job_title' => 'PHP Dev',
        'company' => 'woww', 
        'contact_email' => 'dev@fuck.co.za',
        'contact_phone' => '0764894672',
        'skills' => ['PHP', 'MySQL', 'JavaScript']
    ],
    [
    'id' => '2', 
    'job_title' => 'Designer',
    'company' => 'ABC', 
    'contact_email' => 'yolandi@fuck.com',
    'contact_phone' => '0764894672',
    'skills' => ['Photoshop', 'Illustrator', 'CSS']
    ],
    [
    'id' => '3', 
    'job_title' => 'Web Dev',
    'company' => 'ABC', 
    'contact_email' => 'yolandi@fuck.com',
    'contact_phone' => '0764894672',
    'skills' => ['PHP', 'MySQL', 'JavaScript']
    ]
];

array_push($jobListings,
    [
    'id' => '4', 
    'job_title' => 'Mechanic',
    'company' => 'Darryls', 
    'contact_email' => 'yolandi@fuck.com',
    'contact_phone' => '0764894672',
    'skills' => ['PHP', 'MySQL', 'JavaScript']
    ]
    );

//print_r($jobListings);

echo $jobListings [1]['job_title'];
echo $jobListings [2]['skills'][0];


?>
