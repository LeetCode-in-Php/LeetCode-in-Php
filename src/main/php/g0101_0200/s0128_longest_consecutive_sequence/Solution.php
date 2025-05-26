<?php

namespace leetcode\g0101_0200\s0128_longest_consecutive_sequence;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Hash_Table #Union_Find
// #Top_Interview_150_Hashmap #Big_O_Time_O(N_log_N)_Space_O(1)
// #2023_12_11_Time_154_ms_(75.61%)_Space_32.6_MB_(37.80%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums) {
        if (empty($nums)) {
            return 0;
        }
        sort($nums);
        $max = PHP_INT_MIN;
        $thsMax = 1;
        for ($i = 0; $i < count($nums) - 1; $i++) {
            if ($nums[$i + 1] == $nums[$i] + 1) {
                $thsMax += 1;
                continue;
            }
            if ($nums[$i + 1] == $nums[$i]) {
                continue;
            }
            // Start of a new Sequene
            $max = max($max, $thsMax);
            $thsMax = 1;
        }
        return max($max, $thsMax);
    }
}
