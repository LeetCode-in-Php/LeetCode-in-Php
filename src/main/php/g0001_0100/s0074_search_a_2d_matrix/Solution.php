<?php

namespace leetcode\g0001_0100\s0074_search_a_2d_matrix;

// #Medium #Top_100_Liked_Questions #Array #Binary_Search #Matrix #Data_Structure_I_Day_5_Array
// #Algorithm_II_Day_1_Binary_Search #Binary_Search_I_Day_8 #Level_2_Day_8_Binary_Search
// #Udemy_2D_Arrays/Matrix #Top_Interview_150_Binary_Search #Big_O_Time_O(endRow+endCol)_Space_O(1)
// #2023_12_10_Time_9_ms_(68.18%)_Space_19.8_MB_(51.82%)

class Solution {
    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    public function searchMatrix($matrix, $target) {
        $endRow = count($matrix);
        $endCol = count($matrix[0]);
        $targetRow = 0;
        $result = false;
        for ($i = 0; $i < $endRow; $i++) {
            if ($matrix[$i][$endCol - 1] >= $target) {
                $targetRow = $i;
                break;
            }
        }
        for ($i = 0; $i < $endCol; $i++) {
            if ($matrix[$targetRow][$i] == $target) {
                $result = true;
                break;
            }
        }
        return $result;
    }
}
