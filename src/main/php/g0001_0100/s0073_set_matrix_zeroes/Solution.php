<?php

namespace leetcode\g0001_0100\s0073_set_matrix_zeroes;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Hash_Table #Matrix
// #Udemy_2D_Arrays/Matrix #Top_Interview_150_Matrix #Big_O_Time_O(m*n)_Space_O(1)
// #2023_12_10_Time_37_ms_(61.76%)_Space_23.4_MB_(44.12%)

class Solution {
    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    public function setZeroes(&$matrix) {
        $m = count($matrix);
        $n = count($matrix[0]);
        $row0 = false;
        $col0 = false;
        // Check if 0th col needs to be market all 0s in future
        foreach ($matrix as $ints) {
            if ($ints[0] == 0) {
                $col0 = true;
                break;
            }
        }
        // Check if 0th row needs to be market all 0s in future
        for ($i = 0; $i < $n; $i++) {
            if ($matrix[0][$i] == 0) {
                $row0 = true;
                break;
            }
        }
        // Store the signals in 0th row and column
        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                if ($matrix[$i][$j] == 0) {
                    $matrix[$i][0] = 0;
                    $matrix[0][$j] = 0;
                }
            }
        }
        // Mark 0 for all cells based on signal from 0th row and 0th column
        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                if ($matrix[$i][0] == 0 || $matrix[0][$j] == 0) {
                    $matrix[$i][$j] = 0;
                }
            }
        }
        // Set 0th column
        for ($i = 0; $i < $m; $i++) {
            if ($col0) {
                $matrix[$i][0] = 0;
            }
        }
        // Set 0th row
        for ($i = 0; $i < $n; $i++) {
            if ($row0) {
                $matrix[0][$i] = 0;
            }
        }
    }
}
