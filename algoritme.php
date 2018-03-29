<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   $("p").click(function(){
       if($(".p").parent().is("div") == true) {
           alert("Parent van p is div");
       } else {
           alert("Parent van p is geen div");
       }
   });
});
</script>
</head>
<body>

<p id="p">Hi 2!</p>

<div>
 <p>Hi!</p>
</div>

</body>
</html>


<?php

 $getallen = [13,6,2];

 $a = $getallen[0];
 $b = $getallen[1];
 $c = $getallen[2];
 $storage = 0;

 $ab = $a + $b;
 $bc = $b + $c;

 if($b >= $a && $b <= $c) {
     checkCards($a, $b, $c);
 } else {
     checkCards($a, $b, $c);

     if($ab > $bc) {
         //a 2 stapjes
         echo '<br>Adding 2 steps to A..';
         $storage = $a;
         $a = $b;
         $b = $c;
         $c = $storage;
         $storage = 0;
         checkCards($a, $b, $c);

         $ab = $a + $b;
         $bc = $b + $c;
         if($ab > $bc) {
             //a 2 stapjes
             echo '<br>Adding 2 steps to A..';
             $storage = $a;
             $a = $b;
             $b = $c;
             $c = $storage;
             $storage = 0;
             checkCards($a, $b, $c);
         } else {
             //a 1 stapje
             echo '<br>Adding 1 step to A..';
             $storage = $a;
             $a = $b;
             $b = $storage;
             $storage = 0;
             checkCards($a, $b, $c);
         }
     } else {
         //a 1 stapje
         echo '<br>Adding 1 step to A..';
         $storage = $a;
         $a = $b;
         $b = $storage;
         $storage = 0;
         checkCards($a, $b, $c);

         $ab = $a + $b;
         $bc = $b + $c;
         if($ab > $bc) {
             //a 1 stapje
             echo '<br>Adding 1 step to A..';
             $storage = $a;
             $a = $b;
             $b = $storage;
             $storage = 0;
             checkCards($a, $b, $c);
         } else {
             //a 1 stapje
             echo '<br>Adding 1 step to A..';
             $storage = $a;
             $a = $b;
             $b = $storage;
             $storage = 0;
             checkCards($a, $b, $c);
         }
     }
 }

 function checkCards($a, $b, $c) {
     if($b >= $a && $b <= $c) {
         echo '<hr>';
         echo "We gucci.";
         echo '<hr>';
         echo $a . ' ' . $b . ' ' . $c;
     } else {
         echo '<hr>';
         echo "Not so gucci..";
         echo '<hr>';
         echo $a . ' ' . $b . ' ' . $c;
     }
 }

?>