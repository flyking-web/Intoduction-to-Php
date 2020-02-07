<?php
echo'<title>Lesson3</title>';

//Php operators
//used to perform operations on variables and values
//php has the following operators
//1.Arithmetic operators
//2.Assignment ops
//3.Comparison ops
//4.Logical ops

//1.Arithmetic operators
//+:Addition
$x =23;
$y =234;
$sum = $x + $y;
echo $sum.'<br>';
echo 'The sum of 23 and 234 is '. $sum.'<br>';
echo 23 +234;
echo '<br>';
echo '<br>';
//Subtraction
$x =23;
$y =234;
$sub = $y - $x;
echo $sub.'<br>';
echo 'The sub of 234 and 23 is '. $sub.'<br>';
echo 234 -23;
echo '<br>';
echo '<br>';
//*:Multtiplication
$x =23;
$y =234;
$mult = $y * $x;
echo $mult.'<br>';
echo 'The mult of 23 and 234 is '. $mult.'<br>';
echo 234 * 23;
echo '<br>';
echo '<br>';
// /:Division
$x =23;
$y =234;
$div = $y / $x;
echo $div.'<br>';
echo 'The div of 234 and 23 is '. $div.'<br>';
echo 234 / 23;
echo '<br>';
echo '<br>';
//%:Modulus
$x =3;
$y =2;
$mod = $x % $y;
echo $mod.'<br>';
echo 'The div of 3 and 2 is '. $mod.'<br>';
echo 3 % 2;
echo '<br>';
echo '<br>';
//**:Exponential
echo 2**3;
echo '<br>';
echo '<br>';

//2.Assignment ops
//used to write a value to a variable
$car = 'Benz';
$i = 12;
$f = 12.12;
//Assignment ops with other arithmetic ops
$s = 30;
$sum = $i + $s;
$i += $s;
echo $i;
echo '<br>';
echo '<br>';

$s = 30;
$sum = $i + $s;
$i =$i + $s;
echo $i;
echo '<br>';
echo '<br>';

$a =100;
$b =200;
$a +=100;
echo $a;
echo '<br>';
echo '<br>';

$r =100;
$f =50;
$r -=$f;
echo $r;
echo '<br>';
echo '<br>';

$p =20;
$v =5;
$p *=$v;
echo $p;
echo '<br>';
echo '<br>';

$p =20;
$v =5;
$p /=$v;
echo $p;
echo '<br>';
echo '<br>';

$p =2;
$v =3;
$p **=$v;
echo $p;
echo '<br>';
echo '<br>';

$p =3;
$v =2;
$p %=$v;
echo $p;
echo '<br>';
echo '<br>';

//3.Comparison ops
//used to compare values
//COMPARISON OPERATORS ONLY
//1. == (equal)
echo'<br>';
$s = 2;
$t = 3;
$j = 2;
$answer = $s == $t;
var_dump($answer);
echo'<br>';
echo'<br>';
//data from db
$db_username = 'CassiusOhno';
$db_password = 'ekapassword';
//data from user
$user_username = 'mikedoe';
$user_password = 'ekapassword';
$check = $db_username == $user_username;
var_dump($check);
echo'<br>';
echo'<br>';
//2. ===: Identical : returns true if one variable is equal to another variable and these two
//variables are of the same datatype
$check = $db_password === $user_password;
var_dump($check);
echo'<br>';
echo'<br>';
//3. != : not equal to : returns true if two variables are not equal
$check = $db_username != $user_username;
var_dump($check);
echo "<br>";
echo "<br>";
//4. !== : not identical: returns true if two variables are not identical
$check = $db_username !== $user_username;
var_dump($check);
echo "<br>";
echo "<br>";
//5. > :Greater than: return true if a value is greater than the other
$myname = "Craig Kinya";
$yourname = 'Keith Lee';
$result =strlen($myname) > strlen($yourname);
var_dump($result);
echo "<br>";
echo "<br>";
//6. > :Less than: return true if a value is less than the other
$myname = "Craig Kinya";
$yourname = 'Keith Lee';
$result =strlen($myname) < strlen($yourname);
var_dump($result);
echo "<br>";
echo "<br>";
//7. > :Greater than or equals to: return true if a value is greater than or equals to the other
$myname = "Craig Kinya";
$yourname = 'Keith Lee';
$result =strlen($myname) >= strlen($yourname);
var_dump($result);
echo "<br>";
echo "<br>";
//8. > :Less than or equals to: return true if a value is less than or equals to the other
$myname = "Craig Kinya";
$yourname = 'Keith Lee';
$result =strlen($myname) <= strlen($yourname);
var_dump($result);
echo "<br>";
echo "<br>";

//4.Logical ops
//Used to combine conditional statements
//1. and : returns true if two operations are true
$x = 100;
$y = 200;
if($x == 100 and $y ==200){
    echo'<h1>It is true $x is equal to 100 and $y is equal to 200</h1>';
}
echo "<br>";
echo "<br>";
//2. or : returns true if either one of the two operations is true
$x = 100;
$y = 200;
if($x == 100 or $y !=$x){
    echo'<h1>It is true $x is equal to 100 and $y not equal to 100</h1>';
}
echo "<br>";
if($x == 100 || $y !=$x){
    echo'<h1>It is true $x is equal to 100 and $y not equal to 100</h1>';
}
echo "<br>";
echo "<br>";
//3. ! not : returns true if a variable is false
$check = !($x == 100 or $y !=$x);
var_dump($check);
echo '<br>'


?>


