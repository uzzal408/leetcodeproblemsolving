<?php
class Solution{
    function reverse($x){
        $r_num = 0;
        if($x>0){
            $is_positive = 1;
        }else{
            $is_positive = 0;
        }
        $num = abs($x);
        $lower_limit = -pow(2,32)/2;
        $higher_limit = (pow(2,32)/2)-1;
            while ($num > 1) {
                    $mod = ($num % 10);
                    $r_num = ($r_num * 10) + $mod;
                    $num = $num / 10;
                }
        if($is_positive && $r_num<=$higher_limit) {
            return $r_num;
        }elseif (!$is_positive){
            $r_num = 0-$r_num;
            if($r_num>=$lower_limit){
                return $r_num;
            }
        }
        return 0;
    }
}

$obj = new Solution();
echo $obj->reverse(-1534236469);
