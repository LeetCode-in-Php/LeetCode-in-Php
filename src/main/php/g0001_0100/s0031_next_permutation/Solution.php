<?php

namespace leetcode\g0001_0100\s0031_next_permutation;

// #Medium #Top_100_Liked_Questions #Array #Two_Pointers #Big_O_Time_O(n)_Space_O(1)
// #2023_12_09_Time_7_ms_(86.36%)_Space_18.6_MB_(100.00%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    public function nextPermutation(&$nums) {
        if ($nums == null || count($nums) <= 1) {
            return;
        }
        $i = count($nums) - 2;
        while ($i >= 0 && $nums[$i] >= $nums[$i + 1]) {
            $i--;
        }
        if ($i >= 0) {
            $j = count($nums) - 1;
            while ($nums[$j] <= $nums[$i]) {
                $j--;
            }
            $this->swap($nums, $i, $j);
        }
        $this->reverse($nums, $i + 1, count($nums) - 1);
    }

    private function swap(&$nums, $i, $j) {
        $temp = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $temp;
    }

    private function reverse(&$nums, $i, $j) {
        while ($i < $j) {
            $this->swap($nums, $i++, $j--);
        }
    }
}
