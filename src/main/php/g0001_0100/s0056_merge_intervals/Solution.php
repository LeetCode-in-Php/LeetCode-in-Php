<?php

namespace leetcode\g0001_0100\s0056_merge_intervals;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Sorting
// #Data_Structure_II_Day_2_Array #Level_2_Day_17_Interval #Udemy_2D_Arrays/Matrix
// #Big_O_Time_O(n_log_n)_Space_O(n) #2023_12_10_Time_48_ms_(80.00%)_Space_33.2_MB_(13.33%)

class Solution {
    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    public function merge($intervals) {
        array_multisort($intervals);
        $res = [$intervals[0]];
        $k = 0;
        for ($i = 1; $i < count($intervals); $i++) {
            $start = $intervals[$i][0];
            $end = $intervals[$i][1];
            $last_interv = end($res);
            if ($start <= $last_interv[1]) {
                $res[$k] = [$last_interv[0], max($end, $last_interv[1])];
            } else {
                $res[] = $intervals[$i];
                $k++;
            }
        }
        return $res;
    }
}
