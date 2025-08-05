 <?php
	$a = $_GET['a'];
  $b = $_GET['b'];

    if($a > $b) {
        echo "$a é maior que $b";
    }

    if($a < $b) {
      echo "<br>$a é menor que $b";
    }

    if($a >= $b) {
      if($a > $b)
      {
        echo "<br>$a é maior que $b";
      }
      else{
        echo "<br>$a é igual que $b";
      }
    }

    if($a <= $b) {
      if($a < $b)
      {
        echo "<br>$a é menor que $b";
      }
      else{
        echo "<br>$a é igual que $b";
      }
    }

    if($a == $b) {
      echo "<br>$a é igual a $b";
    }

    if($a != $b) {
      echo "<br>$a é diferente de $b";
    }

    if($a <> $b) {
      echo "<br>$a é diferente de $b";
    }

    if($a === $b) {
      echo "<br>$a é idêntico a $b";
    }

    if($a !== $b) {
      echo "<br>$a não é idêntico a $b";
    }

    if($a <=> $b) {
      if($a < $b){
       echo "<br>$a é menor que $b"; 
      }
      else{
       if($a == $b){
        echo "<br>$a é igual a $b";
      }
      else{
        echo "<br>$a é maior que $b";
      } 
      }
    }
?>
