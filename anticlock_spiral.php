<?php
class Solution{
    function spiralOrder($matrix){
        $newArray = [];
        $top = 0;
        $down = sizeof($matrix)-1;
        $left = 0;
        $right = sizeof($matrix[0])-1;
        $di = 0;

        while ($top<=$down && $left<=$right){
            if($di==0){
                for($i=$top; $i<=$down; $i++){
                    array_push($newArray,$matrix[$i][$left]);
                }
                $left+=1;
            }

            if($di==1){
                for ($i=$left; $i<=$right; $i++){
                    array_push($newArray,$matrix[$down][$i]);
                }
                $down -=1;
            }

            if ($di==2){
                for ($i=$down;$i>=$top; $i--){
                    array_push($newArray,$matrix[$i][$right]);
                }
                $right-=1;
            }
            if ($di==3){
                for ($i=$right;$i>=$left;$i--){
                    array_push($newArray,$matrix[$top][$i]);
                }
                $top+=1;
            }

            $di = ($di+1)%4;
        }


        return $newArray;
    }
}

$obj = new Solution();
$arr = [[1,2,3],
    [4,5,6],
    [7,8,9],
];
print_r($obj->spiralOrder($arr));