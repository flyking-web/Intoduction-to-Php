<?php
echo'<title>Lesson5</title>';

//Loops:
//We use loops to execute a block of code again and again as long as a certain condition is true


//in PHP, we have the following loop types:
//while - loops through a block of code as long as the specified condition is true
//syntax
//while(condition){
//    code to execute
//}
$count = 0;
while($count < 20){//First checks the condition.Loops only if condition is true
    if($count ==0){
        echo $count." IS NOT DIVISIBLE BY THREE <br>";
    }elseif($count % 3 == 0){
        echo $count." DIVISIBLE BY THREE <br>";
    }else{
        echo $count." IS NOT DIVISIBLE BY THREE <br>";
    }
    $count ++;
}
//$count: initializes the loop counter and sets the start value
//$count < 20: continues the loop as long as $count is less than 20
//$count ++: increases the loop counter value by 1 for each loop/Iteration




//do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
//syntax
//do(
//    code to execute
//)while(condition is true)
$x = 0;
do{
    echo "<div style='border; 2px solid red'>
            <p>$x</p>
            </div>";
    $x++;
}while ($x < 10);

//for - loops through a block of code a specified number of times
//syntax
//for(initial value;text value;increment value){
//    code to be executed
//}
//initial value: Initialize the loop counter value:determines the starting of a loop
//test value: Evaluate for each loop iteration. If it evaluates to TRUE, the loop comntinues.
//        If it evaluates to FALSE, the loop ends.
//increment value:Increases the loop counter value
for($x = 0;$x <10;$x+=2){
    echo "<span>Value : $x</span><br>";
}
echo'<br>';
echo'<br>';

//foreach - loops through a block of code for each element in an array


















?>