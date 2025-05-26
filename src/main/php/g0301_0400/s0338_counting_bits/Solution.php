<?php

namespace leetcode\g0301_0400\s0338_counting_bits;

// #Easy #Dynamic_Programming #Bit_Manipulation #LeetCode_75_Bit_Manipulation
// #Udemy_Bit_Manipulation #Big_O_Time_O(num)_Space_O(num)
// #2023_12_24_Time_13_ms_(97.92%)_Space_24.8_MB_(97.92%)

class Solution {
    /**
     * @param Integer $n
     * @return Integer[]
     */
    public function countBits($num) {
        $result = array_fill(0, $num + 1, 0);
        $borderPos = 1;
        $incrPos = 1;
        for ($i = 1; $i < count($result); $i++) {
            // when we reach pow of 2 ,  reset borderPos and incrPos
            if ($incrPos == $borderPos) {
                $result[$i] = 1;
                $incrPos = 1;
                $borderPos = $i;
            } else {
                $result[$i] = 1 + $result[$incrPos++];
            }
        }
        return $result;
    }
}
