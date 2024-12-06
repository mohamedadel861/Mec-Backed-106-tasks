<?php
  $X = 4569;
  $strX = (string)$X; 
  $firstDigit = (int)$strX[0];
  if($firstDigit % 2 == 0){
    echo "EVEN";
  }else {
    echo "ODD";
}
?>