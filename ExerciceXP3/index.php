   <?php
    /*
    Write script for validating whether the value of the variable is a valid integer, Use try.. catch

    Create a function, myFunction, using the given code.

    Using your created function, verify if 2.5 is a valid integer.

    Print 'Validation Complete' after validating, using the finally block.
     */ 

     function myFunction($number){

         if ($number != (int)$number){

             throw new Exception("Type Error: Use of invalid variable");

         }else{
             echo $number." is a valid integer <br> <br>";
         }
     }


     try {
         myFunction(2.5);

     }catch (Exception $e){

         echo $e -> getMessage()." in line ".$e -> getLine()."<br><br>";

     }finally{

         echo "Validation complete <br>";
     }
    ?>
