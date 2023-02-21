<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ExerciceXP1</title>
</head>
<body>


<form action="<?php $_SERVER['PHP_SELF']?>" method="get">
<input type="text" name="name" placeholder="Enter your name">
<input type="submit" value="Send">
</form>

<?php 

/*
Create a simple HTML form and accept the user name and display the name through PHP echo statement.
 */

if (isset($_GET['name'])){
    $name = $_GET['name'];

    if (!empty($name)){
        echo "Hello ".$name;
    }else{
        echo "Please enter your name";
    }
}
?>

</body>
</html>

