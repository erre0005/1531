<?php
    /*
    +---+
    | 1 |
    +---+
    Declare the function named greeting. When this function is called,
    it prints: "<p>Welcome to the well structured code.</p>";
    */

   
    //Call the function.
    
function greeting() {
    echo "<p>Welcome to the well structured code.</p>";
} 

greeting();

// task separator
echo "<hr style=\"margin 1rem 0\">";

?>

<?php
    /*
    +---+
    | 2 |
    +---+
    Declare the function named calculateArithmeticMean. 
    This function has 3 parameters: a, b and c.
    calculateArithmeticMean prints the arithmetic mean of a, b and c.
    */
    
    function calculateArithmeticMean() {
        $a = 3;
        $b = 5;
        $c = 10;
        echo $a + $b + $c;
    }
    
    //Call the function with the values for paremeters.
  
    calculateArithmeticMean();


    // task separator
    echo "<hr style=\"margin 1rem 0\">";
?>

<?php
    /*
    +---+
    | 3 |
    +---+
    Declare the function named calculateTotalPrice. 
    This function has 1 parameter: price.
    calculateTotalPrice returns the total price after the tax of 13%.
    */
    function calculateTotalPrice () {
        $price = 30;
        echo $price + ($price * 0.13);
    }
    
    /*
    Declare the variable total
    and assign it with the value 
    that calculateTotalPrice outputs 
    when it is called (with the value for price parameter).
    */
    
    $total = calculateTotalPrice();

    
    //Print total.
    
    echo $total;




    // task separator
    echo "<hr style=\"margin 1rem 0\">";
?>

<?php
    /*
    +---+
    | 4 |
    +---+
    Declare the global variable length and assign it with the value 12.
    Declare the global variable width and assign it with the value 6.

    Declare the function named calculateRectangleArea. 

    This function calculates and prints the area of rectangle based on the 
    global variables length and width.

    Make these variables accessible inside the local scope, and do the calculation and printing
    */
    $length = 12;
    $width = 6;

    function calculateRectangleArea () {
        global $length;
        global $width;
       echo  $length *  $width;
    }
    
    //Call the function.
    

    calculateRectangleArea();



    // task separator
    echo "<hr style=\"margin 1rem 0\">";
?>

<?php
    /*
    +---+
    | 5 |
    +---+
    If the function for calculating the area of a triangle looks like this:
    */
    function calculateTriangleArea($base = 21, $height = 14) {
        global $area;
        $area =  ($base * $height) / 2;
        echo $area, "<br>";
    }

    /*
    What can you do to make the $area accessible in global scope 
    (without using the return statement)?
    */
    
    
    //Choose the values for parameters and call the function.
    
    calculateTriangleArea();
    //Print $area.
    echo $area;
?>



