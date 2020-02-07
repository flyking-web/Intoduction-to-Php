<?
echo'<title>Fruits</title>';
//An array stores multiple values in one single variable
//An array is a special variable, which can hold more tha one value at a time
$fruit1 ='Mango';
$fruit2 ='Orange';
$fruit3 ='Apple';
$fruit4 ='Banana';
$fruit5 ='Avocado';
$fruit6 ='Pineapple';
$fruit7 ='Guava';
//Create an Array in PHP
//In PHP, the array() function is udes to create an array:
$fruits = array('Mango','Orange','Apple','Banana','Avocado','Pineapple','Guava');
//Count number of items in an array: use count() function
$num_items = count($fruits);
echo $num_items. '<br>';
//Accessing array items: use square brackets with index number inside
echo $fruits[0]. '<br>';
echo $fruits[1]. '<br>';
echo $fruits[2]. '<br>';
echo $fruits[3]. '<br>';
echo $fruits[4]. '<br>';
echo $fruits[5]. '<br>';
echo $fruits[6]. '<br>';
echo '<br>';
echo'My favorite fruit is '.$fruits[0].' and '.$fruits[4].'<br><br>';

//Looping through an indexed array:use foreach
foreach($fruits as $matunda){
    echo $matunda.'<br>';
}











?>