<?php
echo'<title>Lesson2</title>';

//Php data types
//Variables can store diff types of data, that do diff things
//Php supports the following datatypes
//1.String
//2.Integers
//3.Float
//4.Boolean
//5.Arrays
//6.Objects
//7.NULL
//8.Resources

//STRING
//A sequence of characters in double or single qoutes
//e.g "Hello world", 'Hello world'
//Rules that govern names for variables

//A variable starts with the $sign, followed by the name of the variable
//A variable name must start with a letter of the underscore character
//A variable name cannot start with a number
//A variable name can only contain alpha-numeric characters and underscores (A-Z,0-9)
//Variable names are case-sensitive (Sage and $age are two different variables)

$x = "PhpPhpPhpPhpPhpPhpPhpPhpPhpPhp";
$y = "Kotlin";
$Y = "Android";
var_dump($x);
var_dump($y);
var_dump($Y);
//What if you want to know how many characters makes up a string?
//up a string?use: strlen() function
//fuction:code that helps you do repeatitive tasks
echo strlen($x);
echo"<br>";
echo strlen("Cassius Ohno");
echo "<br>";

//count number of words in a string: str_word_count() function
echo str_word_count('I love coding php');
echo'<br>';
$num_words =str_word_count('Coding is awesome');
echo $num_words;
echo '<br>';
//Search for a text within a string: strpos()
$position_for_world = strpos('Hello world', 'world');
echo $position_for_world;
echo "<br>";
//Replace Text Within  a String:use str_replace()
echo str_replace('World','Dunia', 'Hello World');
echo'<br>';

//Intergers
//Numbers that are non decimal
//must at least have one digit
$age = 21;
var_dump($age);
echo'<br>';

//Float
//is a number with a decimal point
$cup_volume = 23.34;
var_dump($cup_volume);
echo'<br>';

//Boolean :true, false
//oftenly used in conditional statements
$a =true;
$b =false;
echo'<br>';
echo 3 < 5; //returns 1:True
echo'<br>';
echo 3 > 5; //returns nothing on the browser, it means false



?>

