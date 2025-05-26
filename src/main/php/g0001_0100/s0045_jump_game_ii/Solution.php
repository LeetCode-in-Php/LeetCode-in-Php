<?php

namespace leetcode\g0001_0100\s0045_jump_game_ii;

// #Medium #Top_100_Liked_Questions #Array #Dynamic_Programming #Greedy
// #Algorithm_II_Day_13_Dynamic_Programming #Dynamic_Programming_I_Day_4
// #Top_Interview_150_Array/String #Big_O_Time_O(n)_Space_O(1)
// #2023_12_09_Time_31_ms_(63.46%)_Space_20.5_MB_(81.73%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function jump($nums) {
        $length = 0;
        $maxLength = 0;
        $minJump = 0;
        for ($i = 0; $i < count($nums) - 1; ++$i) {
            $length--;
            $maxLength--;
            $maxLength = max($maxLength, $nums[$i]);
            if ($length <= 0) {
                $length = $maxLength;
                $minJump++;
            }
            if ($length >= count($nums) - $i - 1) {
                return $minJump;
            }
        }
        return $minJump;
    }
}
