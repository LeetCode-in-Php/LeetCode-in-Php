<?php

namespace leetcode\g0201_0300\s0287_find_the_duplicate_number;

// #Medium #Top_100_Liked_Questions #Array #Binary_Search #Two_Pointers #Bit_Manipulation
// #Binary_Search_II_Day_5 #Big_O_Time_O(n)_Space_O(n)
// #2023_12_23_Time_174_ms_(76.92%)_Space_26.8_MB_(100.00%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function findDuplicate($nums) {
        $arr = array_fill(0, count($nums) + 1, 0);
        foreach ($nums as $num) {
            $arr[$num] += 1;
            if ($arr[$num] == 2) {
                return $num;
            }
        }
        return 0;
    }
}
