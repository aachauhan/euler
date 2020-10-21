<?php
//project euler problem 1
 $sum = 0;
//  for ($i = 0; $i < 1000; $i++) {
      
//       if($i%3 == 0 || $i%5 == 0){
          
//           $sum = $sum + $i;
//       }
//  }
//  print($sum);
 
 //project euler problem 2
 
 $p1 = 1;
 $p2 = 2;
 $n = 10;
 for ($i = 0; $i < $n; $i++) {
     $new = $p1 + $p2;
    print($new . " ");
    $p1 = $p2;
    $p2 = $new;
    while($new <= 10){ //change 10 with 4 mil to test
        if($new % 2 == 0){
            $sum = $sum + $new;
        }
    }
 }
 $sum = $sum + 2;
 print($sum);
 
?>
