<?php

namespace leetcode\g0501_0600\s0560_subarray_sum_equals_k;

// #Medium #Top_100_Liked_Questions #Array #Hash_Table #Prefix_Sum #Data_Structure_II_Day_5_Array
// #Big_O_Time_O(n)_Space_O(n) #2023_12_24_Time_82_ms_(100.00%)_Space_22.2_MB_(83.33%)

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    public function subarraySum($nums, $k) {
        $tempSum = 0;
        $ret = 0;
        $sumCount = array();
        $sumCount[0] = 1;
        foreach ($nums as $i) {
            $tempSum += $i;
            if (isset($sumCount[$tempSum - $k])) {
                $ret += $sumCount[$tempSum - $k];
            }
            if (isset($sumCount[$tempSum])) {
                $sumCount[$tempSum] = $sumCount[$tempSum] + 1;
            } else {
                $sumCount[$tempSum] = 1;
            }
        }
        return $ret;
    }
}
