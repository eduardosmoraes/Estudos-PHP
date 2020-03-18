
<?php

   

echo 'teste';

   if($_POST){
         $op = $_POST ["operation"];
         $n1 = $_POST ["n1"];
         $n2 = $_POST ["n2"];
         $result =  $n1 * $n2;  
          
         if($op == 'Multiplication'){ 
            $total = $n1 * $n2;
         }
         else if ($op == "Division" ){
                $total = $n1 / $n2;
                }
            
         if ($op == "Addiction" ){
        $total = $n1 + $n2;
        }

        if ($op == "Subtraction" ){   
        $total = $n1 - $n2;
        }
 }
        

     
?>
  
