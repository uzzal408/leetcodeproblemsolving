<?php
class Solution{
   public function twoSum($nums, $target){
        for ($i=0;$i<=count($nums);$i++){
            if($nums[$i]+ $nums[$i+1]==$target){
                return [$i,$i+1];
            }
        }
    }
}

$obj = new Solution();
$nums = [3,2,4];
$result = $obj->twoSum($nums,6);
print_r($result);