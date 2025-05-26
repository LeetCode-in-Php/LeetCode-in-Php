<?php

namespace leetcode\g0201_0300\s0283_move_zeroes;

// #Easy #Top_100_Liked_Questions #Array #Two_Pointers #LeetCode_75_Two_Pointers
// #Algorithm_I_Day_3_Two_Pointers #Programming_Skills_I_Day_6_Array #Udemy_Arrays
// #Big_O_Time_O(n)_Space_O(1) #2023_12_23_Time_42_ms_(88.34%)_Space_21.2_MB_(67.71%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    public function moveZeroes(&$nums) {
        $firstZero = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] != 0) {
                $this->swap($firstZero, $i, $nums);
                $firstZero++;
            }
        }
    }

    private function swap($index1, $index2, &$numbers) {
        $val2 = $numbers[$index2];
        $numbers[$index2] = $numbers[$index1];
        $numbers[$index1] = $val2;
    }
}
