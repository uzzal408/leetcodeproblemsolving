<?php
class Solution{
   public function twoSum($nums, $target){
        for ($i=0;$i<=count($nums)-1;$i++) {
            for ($j = $i=1; $j <= count($nums); $j++) {
                if ($i != $j) {
                    if ($nums[$i] + $nums[$j] == $target) {
                        return [$i, $j];
                    }
                }
            }
        }
    }

    public function threeSum($nums){
       for ($i=0;$i<=count($nums)-2;$i++){
          if($nums[$i]+$nums[$i+1]+$nums[$i+2]==0){
              return [$nums[$i],$nums[$i+1],$nums[$i+2]];
          }
       }
       return [];
    }
}

$obj = new Solution();
$nums = [-1,0,1,2,-1,-4];
$result = $obj->threeSum($nums);
print_r($result);