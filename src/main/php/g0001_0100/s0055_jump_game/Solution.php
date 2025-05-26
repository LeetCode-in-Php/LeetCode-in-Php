<?php

namespace leetcode\g0001_0100\s0055_jump_game;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Dynamic_Programming #Greedy
// #Algorithm_II_Day_12_Dynamic_Programming #Dynamic_Programming_I_Day_4 #Udemy_Arrays
// #Top_Interview_150_Array/String #Big_O_Time_O(n)_Space_O(1)
// #2023_12_10_Time_129_ms_(74.56%)_Space_20.4_MB_(82.46%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    public function canJump($nums) {
        $sz = count($nums);
        $tmp = 1;
        for ($i = 0; $i < $sz; $i++) {
            $tmp--;
            if ($tmp < 0) {
                return false;
            }
            $tmp = max($tmp, $nums[$i]);
            if ($i + $tmp >= $sz - 1) {
                return true;
            }
        }
        return true;
    }
}
