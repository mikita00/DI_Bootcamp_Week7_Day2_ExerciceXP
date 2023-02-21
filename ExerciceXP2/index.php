<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ExerciceXP2</title>
</head>
<body>
    
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="name" placeholder="Name"> <br> <br>
    <input type="text" name="age" placeholder="Age"> <br> <br>
    <input type="submit" value="Send">
    </form>
    <br>
    <span>
    <?php 

    /*
 Create a form with 2 inputs:

name

age

Print the name and age after submitting the form.

Hi Joe. You are 22 years old.
 */


    if (isset($_POST['name'], $_POST['age'])){

        $name = $_POST['name'];
        $age = $_POST['age'];
        if (!empty($name) && !empty($age)){
            echo "Hi ".$name.". You are ".$age." years old.";
        }else{
            echo "Please enter your name and your age";
        }
    }
    ?>
    </span>

</body>
</html>