<?php

namespace leetcode\g0201_0300\s0240_search_a_2d_matrix_ii;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Binary_Search #Matrix
// #Divide_and_Conquer #Data_Structure_II_Day_4_Array #Binary_Search_II_Day_8
// #Big_O_Time_O(n+m)_Space_O(1) #2023_12_23_Time_47_ms_(95.24%)_Space_23.3_MB_(100.00%)

class Solution {
    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    public function searchMatrix($matrix, $target) {
        $r = 0;
        $c = count($matrix[0]) - 1;
        while ($r < count($matrix) && $c >= 0) {
            if ($matrix[$r][$c] == $target) {
                return true;
            } elseif ($matrix[$r][$c] > $target) {
                $c--;
            } else {
                $r++;
            }
        }
        return false;
    }
}
