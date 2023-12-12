<?php

namespace leetcode\g0101_0200\s0131_palindrome_partitioning;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #String #Dynamic_Programming
// #Backtracking #Big_O_Time_O(N*2^N)_Space_O(2^N*N)
// #2023_12_11_Time_159_ms_(61.90%)_Space_54.9_MB_(52.38%)

class Solution {
    /**
     * @param String $s
     * @return String[][]
     */
    function partition($s) {
        $res = array();
        $this->backtracking($res, array(), $s, 0);
        return $res;
    }

    private function backtracking(&$res, $currArr, $s, $start) {
        if ($start == strlen($s)) {
            array_push($res, $currArr);
        }
        for ($end = $start; $end < strlen($s); $end++) {
            if (!$this->isPanlindrome($s, $start, $end)) {
                continue;
            }
            array_push($currArr, substr($s, $start, $end - $start + 1));
            $this->backtracking($res, $currArr, $s, $end + 1);
            array_pop($currArr);
        }
    }

    private function isPanlindrome($s, $start, $end) {
        while ($start < $end && $s[$start] == $s[$end]) {
            $start++;
            $end--;
        }
        return $start >= $end;
    }
}
