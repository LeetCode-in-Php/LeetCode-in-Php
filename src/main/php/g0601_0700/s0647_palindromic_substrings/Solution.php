<?php

namespace leetcode\g0601_0700\s0647_palindromic_substrings;

// #Medium #Top_100_Liked_Questions #String #Dynamic_Programming #Big_O_Time_O(n^2)_Space_O(n)
// #2023_12_24_Time_25_ms_(75.00%)_Space_19.6_MB_(50.00%)

class Solution {
    private function expand($a, $l, $r, &$res) {
        while ($l >= 0 && $r < count($a)) {
            if ($a[$l] != $a[$r]) {
                return;
            } else {
                $res[0]++;
                $l--;
                $r++;
            }
        }
    }

    /**
     * @param String $s
     * @return Integer
     */
    public function countSubstrings($s) {
        $a = str_split($s);
        $res = array(0);
        for ($i = 0; $i < count($a); $i++) {
            $this->expand($a, $i, $i, $res);
            $this->expand($a, $i, $i + 1, $res);
        }
        return $res[0];
    }
}
