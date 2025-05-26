<?php

namespace leetcode\g0101_0200\s0189_rotate_array;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Math #Two_Pointers
// #Algorithm_I_Day_2_Two_Pointers #Udemy_Arrays #Top_Interview_150_Array/String
// #Big_O_Time_O(n)_Space_O(1) #2023_12_21_Time_60_ms_(67.03%)_Space_27.9_MB_(100.00%)

class Solution {
    private function reverse(&$nums, $l, $r) {
        while ($l <= $r) {
            $temp = $nums[$l];
            $nums[$l] = $nums[$r];
            $nums[$r] = $temp;
            $l++;
            $r--;
        }
    }

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    public function rotate(&$nums, $k) {
        $n = count($nums);
        $t = $n - ($k % $n);
        $this->reverse($nums, 0, $t - 1);
        $this->reverse($nums, $t, $n - 1);
        $this->reverse($nums, 0, $n - 1);
    }
}
