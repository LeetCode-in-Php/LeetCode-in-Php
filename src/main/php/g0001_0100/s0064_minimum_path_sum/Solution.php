<?php

namespace leetcode\g0001_0100\s0064_minimum_path_sum;

// #Medium #Top_100_Liked_Questions #Array #Dynamic_Programming #Matrix
// #Dynamic_Programming_I_Day_16 #Udemy_Dynamic_Programming #Big_O_Time_O(m*n)_Space_O(m*n)
// #2023_12_10_Time_20_ms_(81.48%)_Space_22.4_MB_(62.96%)

class Solution {
    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    public function minPathSum($a) {
        for ($i = 1; $i < count($a); $i++) {
            $a[$i][0] += $a[$i - 1][0];
        }
        for ($j = 1; $j < count($a[0]); $j++) {
            $a[0][$j] += $a[0][$j - 1];
        }
        for ($i = 1; $i < count($a); $i++) {
            for ($j = 1; $j < count($a[0]); $j++) {
                $a[$i][$j] += min($a[$i - 1][$j], $a[$i][$j - 1]);
            }
        }
        return $a[count($a) - 1][count($a[0]) - 1];
    }
}
