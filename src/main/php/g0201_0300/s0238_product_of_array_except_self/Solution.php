<?php

namespace leetcode\g0201_0300\s0238_product_of_array_except_self;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Prefix_Sum
// #Data_Structure_II_Day_5_Array #Udemy_Arrays #Big_O_Time_O(n^2)_Space_O(n)
// #2023_12_23_Time_58_ms_(86.76%)_Space_29.8_MB_(100.00%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function productExceptSelf($nums) {
        $product = 1;
        $ans = array_fill(0, count($nums), 0);
        foreach ($nums as $num) {
            $product = $product * $num;
        }
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] != 0) {
                $ans[$i] = $product / $nums[$i];
            } else {
                $p = 1;
                for ($j = 0; $j < count($nums); $j++) {
                    if ($j != $i) {
                        $p = $p * $nums[$j];
                    }
                }
                $ans[$i] = $p;
            }
        }
        return $ans;
    }
}
