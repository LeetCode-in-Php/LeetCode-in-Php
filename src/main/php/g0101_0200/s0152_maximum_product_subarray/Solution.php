<?php

namespace leetcode\g0101_0200\s0152_maximum_product_subarray;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Dynamic_Programming
// #Dynamic_Programming_I_Day_6 #Level_2_Day_13_Dynamic_Programming #Udemy_Dynamic_Programming
// #Big_O_Time_O(N)_Space_O(1) #2023_12_17_Time_15_ms_(92.86%)_Space_21.4_MB_(50.00%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function maxProduct($arr) {
        $ans = PHP_INT_MIN;
        $cprod = 1;
        foreach ($arr as $j) {
            $cprod = $cprod * $j;
            $ans = max($ans, $cprod);
            if ($cprod == 0) {
                $cprod = 1;
            }
        }
        $cprod = 1;
        for ($i = count($arr) - 1; $i >= 0; $i--) {
            $cprod = $cprod * $arr[$i];
            $ans = max($ans, $cprod);
            if ($cprod == 0) {
                $cprod = 1;
            }
        }
        return $ans;
    }
}
