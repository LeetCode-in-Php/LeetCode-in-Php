<?php

namespace leetcode\g0101_0200\s0139_word_break;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #String #Hash_Table
// #Dynamic_Programming #Trie #Memoization #Algorithm_II_Day_15_Dynamic_Programming
// #Dynamic_Programming_I_Day_9 #Udemy_Dynamic_Programming #Top_Interview_150_1D_DP
// #Big_O_Time_O(M+max*N)_Space_O(M+N+max) #2023_12_14_Time_7_ms_(75.00%)_Space_19_MB_(84.38%)

class Solution {
    /**
     * @param String $s
     * @param String[] $wordDict
     * @return Boolean
     */
    public function wordBreak($s, $wordDict) {
        $set = array();
        $max = 0;
        $flag = array_fill(0, strlen($s) + 1, false);
        foreach ($wordDict as $st) {
            $set[$st] = true;
            if ($max < strlen($st)) {
                $max = strlen($st);
            }
        }
        for ($i = 1; $i <= $max; $i++) {
            if ($this->dfs($s, 0, $i, $max, $set, $flag)) {
                return true;
            }
        }
        return false;
    }

    private function dfs($s, $start, $end, $max, $set, &$flag) {
        if (!$flag[$end] && isset($set[substr($s, $start, $end - $start)])) {
            $flag[$end] = true;
            if ($end == strlen($s)) {
                return true;
            }
            for ($i = 1; $i <= $max; $i++) {
                if ($end + $i <= strlen($s) && $this->dfs($s, $end, $end + $i, $max, $set, $flag)) {
                    return true;
                }
            }
        }
        return false;
    }
}
