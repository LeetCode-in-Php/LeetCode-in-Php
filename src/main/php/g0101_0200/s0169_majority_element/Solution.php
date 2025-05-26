<?php

namespace leetcode\g0101_0200\s0169_majority_element;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #Array #Hash_Table #Sorting #Counting
// #Divide_and_Conquer #Data_Structure_II_Day_1_Array #Udemy_Famous_Algorithm
// #Top_Interview_150_Array/String #Big_O_Time_O(n)_Space_O(1)
// #2023_12_21_Time_43_ms_(72.03%)_Space_23_MB_(100.00%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function majorityElement($nums) {
        $search = array_count_values($nums);
        $count = count($nums) / 2;
        foreach ($search as $key => $value) {
            if ($value > $count) {
                return $key;
            }
        }
    }
}
