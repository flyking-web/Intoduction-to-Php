<?php
echo'<title>Lesson4</title>';

//Conditional statements are used to perform different actions on different conditions.
//To allow your code to perform diff actions on diff variabls.
//php has the following if conditional statements

//1. if statement  - executes some code if one condition is true
//2. if...else statement - executes some code if a condition is true and another code if that condition is false
//3.if...elseif...else statement - executes different codes for more than two conditions
//switch statement - selects one of many blocks of code to be executed

//if(conditon to examine){
//    code to be executed if condition is TRUE
//}
//1. if statement  - executes some code if one condition is true
$db_first_name = 'CassiusOhno';
$user_first_name = 'CassiusOhno';
if($user_first_name == $db_first_name){
    echo '<p>Credentials matched. You can login...</p>';
}
$age = 15;
if($age < 18){
    echo "<h1> You cannot take alcohol.Go home and study hard</h1>";
}

//2.if...else: executes code if the condition is true, and the other condition is false
$age = 20;
if($age < 18) {
    echo "<h1> You cannot take alcohol.Go home and study hard</h1>";
}else{
    echo"<h1>Hurray, you are old enough, grab a crate</h1>";
}
echo '<br>';
//3.if...elseif...else statement - executes different codes for more than two conditions
//if(conditon to examine){
//   code to be executed if condition is TRUE
//}elseif(condition){
//     code to be executed if first condition is FALSE, and this condition is TRUE
//}elseif(condition{
//    code to be executed if second condition is FALSE, and this condition is TRUE
//)}else if(condition){
//      code to be executed if all conditions are false
//}
$age = 19;
$kenyan = false;
if($age < 18) {
    echo "<h1> You cannot take alcohol.Go home and study hard</h1>";
}elseif($kenyan== true){
    echo"<h1>Hurray, you are old enough, grab a crate</h1>";
}else{
    echo"<h2>You are under age and not Kenyan, you are kidding!!!</h2>";
}
echo '<br>';

//Assignment:
//1.Using a conditional statement, check if 100 is a multiple of 2:
//if true echo '100 is a multiple of 2'else echo'100 is not a multiple of 2'
 $q = 100;
 $r = 2;
 $mod = $q%$r;
if($mod==50){
     echo'<h2>100 is a multiple of 2</h2>';
}else{
     echo '<h3>100 is not a multiple of 2</h3>';
}
 echo"<br>";


//2.Write code that calculates the volume of a cylinder of height 14 and diameter 14.
//echo"This is the cylinder to use if the volume id greater than 10"
$height = 14;
$diameter = 14;
$pie= 22/7;
$volume= $pie*$diameter/2*$height;
if($volume > 10){
    echo '<h3> This is the cylinder to use </h3>';
}
    echo "<br>";

//switch statement - selects one of many blocks of code to be executed
//switch syntax
//switch (n){
//    case label1:
//        code to execute if n == label1
//        break
//
//    case label2:
//        code to execute if n == label2
//         break
//
//    case label3:
//        code to execute if n == label3
//         break
//
//    case label4:
//        code to execute if n == label4
//        break
//
//
//    default:
//        code to be executed
//
//}
$favTeam = 'Wolves';
switch ($favTeam){
    case 'Man-U':
        echo '<p style="color:red">Man-U at position 5</p>';
        break;
    case 'Liverpool':
        echo '<p style="color:#ff3f36">Liverpool at position 1</p>';
        break;
    case 'Wolves':
        echo '<p style="color:orange">Wolves at position 6</p>';
        break;
    case 'Chelsea':
        echo '<p style="color:blue">Chelsea at position 4</p>';
        break;
    default:
        echo'<p style="color:green">None of the above</p>';

}



?>