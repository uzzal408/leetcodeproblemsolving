<?php
class Solution{
   public function twoSum($nums, $target){
        for ($i=0;$i<=count($nums)-1;$i++){
            for ($j=1; $j<=count($nums); $j++)
            if($nums[$i]+ $nums[$j]==$target){
                return [$i,$j];
            }
        }
        return [];
    }
}

$obj = new Solution();
$nums = [3,4,3];
$result = $obj->twoSum($nums,6);
print_r($result);