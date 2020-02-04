<?php
// Task 1
/*
Use while loop to echo the numbers from 0 to 30 (each number in the next line).

The first 10 numbers (0 to 10) are going to be in regular type,

The second 10 numbers (11 to 20) are going to be bolded and

the third 10 numbers (21 to 30) are going to be italic.
*/

$i = 0;
while ($i <= 30) {
    if ($i <= 10){
        echo $i . "<br>";
        $i++;
    } elseif ($i > 10 && $i <= 20){
        echo "<strong> $i </strong><br>";
        $i++;
    } else  {
        echo "<i> ${i} </i><br>";
        $i++;
    }
}


//Task 2
/*
Create array with elements: 2, 4, 7, 8, 10 and 11.

Loop through the array and divide each element by 3

Use number_format(number,decimals,decimalpoint,separator) function to format each array element to 2 decimals. Print formatted array elements (each number in the new line).
*/
$numb = [
    2, 
    4, 
    7, 
    8, 
    10, 
    11
 ];

//print_r($numb);

foreach ($numb as $d) {
    $formattedNum = number_format($d / 3, 2) . "<br>";
    echo $formattedNum;
    
}


// Task 3
/*

1.- Classify the staff from $employee_numbers array using foreach loop.


2.- If the first digit of employee number is 1, it means employee's sector is management.

3.- If the first digit of employee number is 2, it means employee's sector is technical department.

4.- If the first digit of employee number is 3, it means employee's sector is accounting.

5.- Use substr() to extract the part of the array element value (employee number) that you need in your conditional statement (if-else or switch).

6.- You need to concatenate the expression in your foreach loop that will print the following statements in unordered list as it looks below:

7.- Sam Jerry's employee number is: 1849 :: MANAGEMENT
David Flint's employee number is: 2274 :: TECHNICAL DEPARTMENT
Lena Vincent's employee number is: 2532 :: TECHNICAL DEPARTMENT
Robert Vanny's employee number is: 3471 :: ACCOUNTING
*/

$employee_numbers = [
   "Sam Jerry" => "1849", //management
   "David Flint" => "2274", //technical department
   "Lena Vincent" => "2532",// technical department
   "Robert Vanny" => "3471" //accounting
];
 //print_r($employee_numbers);

foreach ($employee_numbers as $ber => $val) {
    //echo $ber . "<br>";
    $sec = substr($val, 0, 1);
    switch ($sec) {
            case 1;
                echo "${ber}'s employee number is: ${val} <br>";
                break;
            case 2;
                echo "${ber}'s employee number is: ${val} <br>";
                break;
            case 3;
                echo "${ber}'s employee number is: ${val} <br>";
    }
}


?>
