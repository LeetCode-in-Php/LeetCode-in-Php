<?php

namespace leetcode\g0701_0800\s0739_daily_temperatures;

// #Medium #Top_100_Liked_Questions #Array #Stack #Monotonic_Stack #LeetCode_75_Monotonic_Stack
// #Programming_Skills_II_Day_6 #Big_O_Time_O(n)_Space_O(n)
// #2023_12_24_Time_410_ms_(100.00%)_Space_29.9_MB_(100.00%)

class Solution {
    /**
     * @param Integer[] $temperatures
     * @return Integer[]
     */
    public function dailyTemperatures($temperatures) {
        $sol = array_fill(0, count($temperatures), 0);
        $sol[count($temperatures) - 1] = 0;
        for ($i = count($sol) - 2; $i >= 0; $i--) {
            $j = $i + 1;
            while ($j <= count($sol)) {
                if ($temperatures[$i] < $temperatures[$j]) {
                    $sol[$i] = $j - $i;
                    break;
                } else {
                    if ($sol[$j] == 0) {
                        break;
                    }
                    $j = $j + $sol[$j];
                }
            }
        }
        return $sol;
    }
}
