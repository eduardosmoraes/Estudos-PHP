
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculator.css">
    
    <title>Calculator</title>
</head>
<body>

    <h1>Calculator</h1>
    <br>
    <form action="calculator_pag.php" method="post">
        
    <p> First Value: </p> <input type="number" name="n1"> <br>  <br> 
   <p> Second Value: </p>  <input type="number" name="n2">  <br>  <br> 


    <select name = "operation">

        <option>Multiplication</option>
        <option>Division</option>
        <option>Addition</option>
        <option>Subtraction</option>

    </select>
    <br>
    <br>
    <br>
    

    <button>
        <p>Calculate</p> 
    </button>

    </form>
    
 

<?php

include ("./calculator.php");

 
?>

<p>
<?php echo $total;?>
</p>
    
</body>
</html>




