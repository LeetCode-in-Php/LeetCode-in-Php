<?php

namespace leetcode\g0001_0100\s0051_n_queens;

// #Hard #Top_100_Liked_Questions #Array #Backtracking #Big_O_Time_O(N!)_Space_O(N)
// #2023_12_10_Time_13_ms_(92.31%)_Space_19.4_MB_(100.00%)

class Solution {
    /**
     * @param Integer $n
     * @return String[][]
     */
    public function solveNQueens($n) {
        $pos = array_fill(0, $n + 2 * $n - 1 + 2 * $n - 1, false);
        $pos2 = array_fill(0, $n, 0);
        $ans = array();
        $this->helper($n, 0, $pos, $pos2, $ans);
        return $ans;
    }

    private function helper($n, $row, &$pos, &$pos2, &$ans) {
        if ($row == $n) {
            $this->construct($n, $pos2, $ans);
            return;
        }
        for ($i = 0; $i < $n; $i++) {
            $index = $n + 2 * $n - 1 + $n - 1 + $i - $row;
            if ($pos[$i] || $pos[$n + $i + $row] || $pos[$index]) {
                continue;
            }
            $pos[$i] = true;
            $pos[$n + $i + $row] = true;
            $pos[$index] = true;
            $pos2[$row] = $i;
            $this->helper($n, $row + 1, $pos, $pos2, $ans);
            $pos[$i] = false;
            $pos[$n + $i + $row] = false;
            $pos[$index] = false;
        }
    }

    private function construct($n, $pos, &$ans) {
        $sol = array();
        for ($r = 0; $r < $n; $r++) {
            $queenRow = array_fill(0, $n, '.');
            $queenRow[$pos[$r]] = 'Q';
            array_push($sol, implode($queenRow));
        }
        array_push($ans, $sol);
    }
}
