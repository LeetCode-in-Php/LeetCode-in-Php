<?php

namespace leetcode\g0001_0100\s0004_median_of_two_sorted_arrays;

// #Hard #Top_100_Liked_Questions #Top_Interview_Questions #Array #Binary_Search #Divide_and_Conquer
// #Big_O_Time_O(log(min(N,M)))_Space_O(1) #2023_12_03_Time_28_ms_(68.47%)_Space_19.6_MB_(9.94%)

class Solution {
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $nums3 = [];

        $sum = count($nums1) + count($nums2);
        $med = ($sum / 2);

        if($index = $sum % 2 === 0) {
            $index = [$med - 1, $med];
        } else {
            $index = [floor($med)];
        }

        $i1 = 0;
        $i2 = 0;
        for($i1 = 0; $i < $sum; $i++) {
            if(!isset($nums1[$i1])){
                $nums3[] = $nums2[$i2];
                $i2++;
                continue;
            }

            if(!isset($nums2[$i2])){
                $nums3[] = $nums1[$i1];
                $i1++;
                continue;
            }

            if ($nums1[$i1] < $nums2[$i2]) {
                $nums3[] = $nums1[$i1];
                $i1++;
            } else {
                $nums3[] = $nums2[$i2];
                $i2++;
            }
        }

        $median = isset($index[1])
        ? ($nums3[$index[0]] + $nums3[$index[1]]) / 2
        : $nums3[$index[0]];

        return $median;
    }
}
