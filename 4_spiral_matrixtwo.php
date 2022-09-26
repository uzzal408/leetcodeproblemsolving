<?php
class Solution{
   function generateMatrix($n){
       $top = 0;
       $down = $n;
       $left = 0;
       $right = $n;
       $di = 0;
       $newArray = [];
       $value = 0;
       while ($top<$down && $left<$right){
           if($di==0) {
               for ($i = $top; $i < $right; $i++) {
                  $value +=1;
                  $newArray[$top][$i] = $value;
               }
               $top+=1;
           }

           if ($di==1){
               for ($i = $top; $i<$down;$i++){
                   $value+=1;
                   $newArray[$i][$right] = $value;
               }
               $right-=1;
           }

           if($di==2){
               for ($i=$right;$i>$left;$i--){
                   $value +=1;
                   $newArray[$i][$down] = $value;
               }
               $down -=1;
           }
           if($di==3){
               for ($i=$down;$i>$top;$i--){
                   $value +=1;
                   $newArray[$i][$left] = $value;
               }
               $left+=1;
           }


           $di = ($di+1)%4;
       }

       return $newArray;
   }
}

$obj = new Solution();
print_r($obj->generateMatrix(3));
