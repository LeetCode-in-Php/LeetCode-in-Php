<?php

namespace leetcode\g0001_0100\s0010_regular_expression_matching;

// #Hard #Top_Interview_Questions #String #Dynamic_Programming #Recursion #Udemy_Dynamic_Programming
// #Big_O_Time_O(m*n)_Space_O(m*n) #2023_12_03_Time_10_ms_(64.52%)_Space_19.3_MB_(61.29%)

class Solution {
    private $cache;

    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    public function isMatch($s, $p) {
        $this->cache = array_fill(0, strlen($s) + 1, array_fill(0, strlen($p) + 1, null));
        return $this->isMatchHelper($s, $p, 0, 0);
    }

    private function isMatchHelper($s, $p, $i, $j) {
        if ($j == strlen($p)) {
            return $i == strlen($s);
        }
        if ($this->cache[$i][$j] !== null) {
            return $this->cache[$i][$j];
        }
        $firstMatch = ($i < strlen($s)) && ($s[$i] == $p[$j] || $p[$j] == '.');
        if (($j + 1) < strlen($p) && $p[$j + 1] == '*') {
            $result = ($firstMatch && $this->isMatchHelper($s, $p, $i + 1, $j)) ||
                $this->isMatchHelper($s, $p, $i, $j + 2);
        } else {
            $result = $firstMatch && $this->isMatchHelper($s, $p, $i + 1, $j + 1);
        }
        $this->cache[$i][$j] = $result;
        return $result;
    }
}
