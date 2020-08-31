<?php

include "header.php";

//CALCULATRICE
class Calculatrice{
  private $number1;
  private $numbner2;

  public function __construct($number1, $number2){

    $this->num1 = $number1;
    $this->num2 = $number2;
  }

  public function plus(){
    return ($number1+$number2);
  }
  public function less(){
    return ($number1-$number2);
  }
  public function multi(){
    return ($number1*$number2);
}
  public function divide(){
    return ($number1/$number2);
  }
  public function modulo(){
    return ($number1%$number2);
  }
}

?>

<!-- Addition -->
<form name="plus" action="" method="post">
  <ul>
    <li><p>First Number  : <input type="number" name="number1" value='$number1'/></p></li>
    <li><p>Second Number : <input type="number" name="number2" value='$number2'/></p></li>
    <li><p><input type="submit" name="add" value="+"></p></li>
  </ul>


<?php include "footer.php"; ?>
