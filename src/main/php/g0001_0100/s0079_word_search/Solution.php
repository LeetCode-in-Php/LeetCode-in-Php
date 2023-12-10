<?php

namespace leetcode\g0001_0100\s0079_word_search;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Matrix #Backtracking
// #Algorithm_II_Day_11_Recursion_Backtracking #Big_O_Time_O(4^(m*n))_Space_O(m*n)
// #2023_12_10_Time_599_ms_(100.00%)_Space_19_MB_(79.49%)

class Solution {
    /**
     * @param String[][] $board
     * @param String $word
     * @return Boolean
     */
    public function exist($board, $word) {
        $wordCountMap = [];
        for ($i = 0; $i < strlen($word); $i++) {
            $char = $word[$i];
            if (isset($wordCountMap[$char])) {
                $wordCountMap[$char] += 1;
            } else {
                $wordCountMap[$char] = 1;
            }
        }
        $positions = [];
        foreach ($board as $rowIdx => $items) {
            foreach ($items as $colIdx => $item) {
                if ($item === $word[0]) {
                    $positions[] = [$rowIdx, $colIdx];
                }
                if (isset($wordCountMap[$item])) {
                    $wordCountMap[$item]--;
                }
            }
        }
        foreach ($wordCountMap as $count) {
            if ($count > 0) {
                return false;
            }
        }
        foreach ($positions as $position) {
            if ($this->dfs($board, $word, 0, $position)) {
                return true;
            }
        }
        return false;
    }

    function dfs($board, $word, $index, $position) {
        [$x, $y] = $position;
        if (!isset($board[$x][$y])) {
            return false;
        }
        if ($board[$x][$y] !== $word[$index]) {
            return false;
        } elseif ($index === strlen($word) - 1) {
            return true;
        }
        $board[$x][$y] = '-1';
        $dirs = [[0, 1], [0, -1], [1, 0], [-1, 0]];
        foreach ($dirs as $dir) {
            $newX = $x + $dir[0];
            $newY = $y + $dir[1];
            if ($this->dfs($board, $word, $index + 1, [$newX, $newY])) {
                return true;
            }
        }
        return false;
    }
}
