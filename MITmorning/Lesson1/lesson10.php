
<?php
require 'config.php';
require 'header.php';
////create a database
//$sql = "CREATE DATABASE demo1";
////request query to the database system
////make the request/execute: mysqli_query:return boolean
//if (mysqli_query($connection,$sql)){
//    echo "database created successfull <br>";
//}else{
//    echo "ERROR: could not execute $sql".mysqli_error($connection);
//}
//INSERTING DATA INTO TABLE




//form kamili
//algorithm
//1.create variable that will store received data
$name= $price= $description= $quantity = $color= $condition =  '';
//2.create variable that will store error message
$name_err= $price_err= $description_err = $quantity_err = $color_err= $condition_err = '';
//3.process incoming data
//    3.1 check request method
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = safisha($_POST['name']);
    $price = safisha($_POST['price']);
    $description = safisha($_POST['description']);
    $quantity = safisha($_POST['quantity']);
    $color = safisha($_POST['color']);
    $condition = safisha($_POST['condition']);

//    3.2 clean data
}
//    3.3 check if data is empty
//if true assign error messages to respective error variables
if (empty($name)){
    $name_err='please fill in your price';
}
if (empty($price)){
    $price_err='please fill in your price';
}
if (empty($description)){
    $description_err='please fill in description';
}
if (empty($color)){
    $color_err='please fill in color';
}
if (empty($condition)){
    $condition_err='please confirm condition';
}
if ($color = $condition ) {
    echo "conditions match";}
else{
//    $password1 = d5($password1);
    $sql = "INSERT INTO `products`(`id`,`name` , `price`, `description`, `color`, `condition`) VALUES (NULL ,'$name','$price','$description','$color','$condition')";

    if (mysqli_query($connection,$sql)){
        echo "data inserted successfully <br>";
    }else{
        echo "data not inserted".mysqli_error($connection);
    }
}





//4.display the data: SOON store data in a database
function safisha($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$sql = "INSERT INTO `products`(`id`,`name` ,`price`, `description`, `color`, `condition`) VALUES (NULL,'$name','$price','$description','$color','$condition')";

if (mysqli_query($connection,$sql)){
    echo "data inserted successfully <br>";
}else{
    echo "data not inserted".mysqli_error($connection);
}

?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <h1>register goods here</h1>
        <label for="Name"></label><br>
        <input type="text" name="name" placeholder="name"><br>
        <span class="error" style="color: red"><?php echo $name_err
            ?></span><br>
        <label for="Price"></label><br>
        <input type="number" name="price" placeholder="price"><br>
        <span class="error" style="color: red"><?php echo $price_err
            ?></span><br>

        <label for="Description"></label><br>
        <input type="text" name="description"placeholder="description"><br>
        <span class="error" style="color: red"><?php echo $description_err
            ?></span><br>


        <label for="Color"></label><br>
        <input type="text" name="color"placeholder="color"><br>
        <span class="error" style="color: red"><?php echo $color_err
            ?></span><br>


        <label for="male"><input type="radio" name="condition" value="good"></label>
        <input type="radio" name="condition" value="poor">
        <input type="radio" name="condition" value="average">
        <span class="error" style="color: red"><?php echo $condition_err
            ?></span><br>

        <button type="submit">submit</button>

    </fieldset>
</form>
<?php
require 'footer.php';
?>