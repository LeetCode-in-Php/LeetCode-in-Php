<?php

namespace leetcode\g0201_0300\s0221_maximal_square;

// #Medium #Top_100_Liked_Questions #Array #Dynamic_Programming #Matrix
// #Dynamic_Programming_I_Day_16 #Big_O_Time_O(m*n)_Space_O(m*n)
// #2023_12_21_Time_209_ms_(83.33%)_Space_40.6_MB_(100.00%)

class Solution {
    /**
     * @param String[][] $matrix
     * @return Integer
     */
    public function maximalSquare($matrix) {
        $m = count($matrix);
        if ($m == 0) {
            return 0;
        }
        $n = count($matrix[0]);
        if ($n == 0) {
            return 0;
        }
        $dp = array_fill(0, $m + 1, array_fill(0, $n + 1, 0));
        $max = 0;
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($matrix[$i][$j] == '1') {
                    $next = 1 + min($dp[$i][$j], min($dp[$i + 1][$j], $dp[$i][$j + 1]));
                    if ($next > $max) {
                        $max = $next;
                    }
                    $dp[$i + 1][$j + 1] = $next;
                }
            }
        }
        return $max * $max;
    }
}
