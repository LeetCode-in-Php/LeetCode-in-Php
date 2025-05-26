<?php

namespace leetcode\g0201_0300\s0215_kth_largest_element_in_an_array;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Sorting #Heap_Priority_Queue
// #Divide_and_Conquer #Quickselect #LeetCode_75_Heap/Priority_Queue
// #Data_Structure_II_Day_20_Heap_Priority_Queue #Top_Interview_150_Heap
// #Big_O_Time_O(n*log(n))_Space_O(log(n)) #2023_12_21_Time_222_ms_(49.15%)_Space_29.8_MB_(100.00%)

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findKthLargest($nums, $k) {
        $n = count($nums);
        sort($nums);
        return $nums[$n - $k];
    }
}
