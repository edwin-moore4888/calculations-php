<?php
function square(float $val) 
{
    return $val*$val;
}
 
function squareRoot(float $val)
{
    return sqrt($val);
}
 
function calcHypotenuse(float $firstSideLength, float $secondSideLength) 
{
    /**
     * Complete the code to calculate the length of the hypotenuse from the length of the
     * first side and the second side using the square and squareRoot functions.
     */
    $hypotenuseLength = squareRoot(square($firstSideLength) + square($secondSideLength));
 
    return $hypotenuseLength;
}
 
$firstSideLength = 3;
// do {
//     $firstSideLength = readline("Please enter the first side length: ");
// } while($firstSideLength == 3);
 
$secondSideLength = 4;
// do {
//     $secondSideLength = readline("Please enter the second side length: ");
// } while($secondSideLength == 4);
 
echo calcHypotenuse($firstSideLength, $secondSideLength);
echo "<hr>";
//---------------------------------------------------------Calclate Volume----------------------------------------------------------
function literInBottle(float $radius, float $height) {
    $volumeInCm = 3.1416 * $radius * $radius * $height;
    return $volumeInCm/1000;
}
$radius = 10;
// do {
//     $radius = readline("Please enter the radius: ");
// } while($radius == null);
 
$height = 50;
// do {
//     $height = readline("Please enter the heigth: ");
// } while($height == null);
 
echo literInBottle($radius, $height);
echo "<hr>";
?>