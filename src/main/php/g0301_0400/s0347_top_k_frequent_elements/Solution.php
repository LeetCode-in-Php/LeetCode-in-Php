<?php

namespace leetcode\g0301_0400\s0347_top_k_frequent_elements;

// #Medium #Top_100_Liked_Questions #Array #Hash_Table #Sorting #Heap_Priority_Queue #Counting
// #Divide_and_Conquer #Quickselect #Bucket_Sort #Data_Structure_II_Day_20_Heap_Priority_Queue
// #Big_O_Time_O(n*log(n))_Space_O(k) #2023_12_24_Time_23_ms_(84.85%)_Space_21.6_MB_(100.00%)

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    public function topKFrequent($nums, $k) {
        $count = [];
        foreach ($nums as $num) {
            if (!isset($count[$num])) {
                $count[$num] = 0;
            }
            $count[$num] += 1;
        }
        arsort($count);
        $result = [];
        $r = 0;
        foreach ($count as $i => $num) {
            $result[] = $i;
            $r++;
            if ($r === $k) {
                break;
            }
        }
        return $result;
    }
}
