<?php

namespace leetcode\g0001_0100\s0011_container_with_most_water;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Greedy #Two_Pointers
// #Algorithm_II_Day_4_Two_Pointers #Big_O_Time_O(n)_Space_O(1)
// #2023_12_07_Time_177_ms_(88.58%)_Space_31.7_MB_(66.67%)

class Solution {
    /**
     * @param Integer[] $height
     * @return Integer
     */
    public function maxArea($height) {
        $maxArea = -1;
        $left = 0;
        $right = count($height) - 1;
        while ($left < $right) {
            if ($height[$left] < $height[$right]) {
                $maxArea = max($maxArea, $height[$left] * ($right - $left));
                $left++;
            } else {
                $maxArea = max($maxArea, $height[$right] * ($right - $left));
                $right--;
            }
        }
        return $maxArea;
    }
}
