<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
      $name = "PHP Store";
      $credit = 1000;
      
      echo "<h1>Welcome to ".$name."!</h1>";
      echo "<h2>You have $".$credit." in your wallet.</h2>";

      $products['Computer']=750;
      $products['Car']=15000;
      $products['iPhone']=1000;
      $products['Toaster']=75;

      $taxRate=0.0825;

      foreach($products as $key => $value){
        echo "<p>The ".$key." costs $".$value."</p>";
      }

      function tax_calc($amount,$tax){
        $calculate_tax = $amount*$tax;
        $amount = round($amount+$calculate_tax,2);
        return $amount;
      }
      echo "<h2>Items you can afford</h2>";

      foreach($products as $key => $value){
        $costWithTax = tax_calc($value,$taxRate);
        if($costWithTax <= $credit ){
          echo "<p>".$key." $".$value."</p>";
        }
      }
    ?>
  </body>
</html>