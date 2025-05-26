<?php

namespace leetcode\g0001_0100\s0042_trapping_rain_water;

// #Hard #Top_100_Liked_Questions #Top_Interview_Questions #Array #Dynamic_Programming #Two_Pointers
// #Stack #Monotonic_Stack #Dynamic_Programming_I_Day_9 #Udemy_Two_Pointers
// #Top_Interview_150_Array/String #Big_O_Time_O(n)_Space_O(1)
// #2023_12_09_Time_29_ms_(69.15%)_Space_21.5_MB_(97.87%)

class Solution {
    /**
     * @param Integer[] $height
     * @return Integer
     */
    public function trap($height) {
        $result = 0;
        $i = 0;
        $j = count($height) - 1;
        $maxLeft = 0;
        $maxRight = 0;
        while ($i < $j) {
            if ($height[$i] < $height[$j]) {
                $maxLeft = max($maxLeft, $height[$i]);
                $result += $maxLeft - $height[$i];
                $i++;
            } else {
                $maxRight = max($maxRight, $height[$j]);
                $result += $maxRight - $height[$j];
                $j--;
            }
        }
        return $result;
    }
}
