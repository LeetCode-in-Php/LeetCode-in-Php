<?php

namespace leetcode\g0101_0200\s0121_best_time_to_buy_and_sell_stock;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #Array #Dynamic_Programming
// #Data_Structure_I_Day_3_Array #Dynamic_Programming_I_Day_7 #Level_1_Day_5_Greedy #Udemy_Arrays
// #Big_O_Time_O(N)_Space_O(1) #2023_12_11_Time_282_ms_(43.99%)_Space_31.7_MB_(63.72%)

class Solution {
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $maxProfit = 0;
        $min = $prices[0];
        for ($i = 1; $i < count($prices); $i++) {
            if ($prices[$i] > $min) {
                $maxProfit = max($maxProfit, $prices[$i] - $min);
            } else {
                $min = $prices[$i];
            }
        }
        return $maxProfit;
    }
}
