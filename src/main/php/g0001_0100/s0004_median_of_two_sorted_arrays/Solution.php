<?php

namespace leetcode\g0001_0100\s0004_median_of_two_sorted_arrays;

// #Hard #Top_100_Liked_Questions #Top_Interview_Questions #Array #Binary_Search #Divide_and_Conquer
// #Top_Interview_150_Binary_Search #Big_O_Time_O(log(min(N,M)))_Space_O(1)
// #AI_can_be_used_to_solve_the_task #2023_12_03_Time_23_ms_(88.34%)_Space_19.1_MB_(87.47%)

class Solution {
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    public function findMedianSortedArrays($nums1, $nums2) {
        $nums3 = [];
        $sum = count($nums1) + count($nums2);
        $med = ($sum / 2);
        if ($sum % 2 === 0) {
            $index = [$med - 1, $med];
        } else {
            $index = [floor($med)];
        }
        $i = 0;
        $i1 = 0;
        $i2 = 0;
        while ($i < $sum) {
            if (!isset($nums1[$i1])) {
                $nums3[] = $nums2[$i2];
                $i2++;
                $i++;
                continue;
            }
            if (!isset($nums2[$i2])) {
                $nums3[] = $nums1[$i1];
                $i1++;
                $i++;
                continue;
            }
            if ($nums1[$i1] < $nums2[$i2]) {
                $nums3[] = $nums1[$i1];
                $i1++;
            } else {
                $nums3[] = $nums2[$i2];
                $i2++;
            }
            $i++;
        }
        return isset($index[1])
            ? ($nums3[$index[0]] + $nums3[$index[1]]) / 2
            : $nums3[$index[0]];
    }
}
