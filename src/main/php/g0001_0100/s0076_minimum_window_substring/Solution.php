<?php

namespace leetcode\g0001_0100\s0076_minimum_window_substring;

// #Hard #Top_100_Liked_Questions #Top_Interview_Questions #String #Hash_Table #Sliding_Window
// #Level_2_Day_14_Sliding_Window/Two_Pointer #Top_Interview_150_Sliding_Window
// #Big_O_Time_O(s.length())_Space_O(1) #2023_12_10_Time_21_ms_(100.00%)_Space_19.5_MB_(89.09%)

class Solution {
    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    public function minWindow($s, $t) {
        $map = array_fill(0, 128, 0);
        for ($i = 0; $i < strlen($t); $i++) {
            $map[ord($t[$i]) - ord('A')]++;
        }
        $count = strlen($t);
        $begin = 0;
        $end = 0;
        $d = PHP_INT_MAX;
        $head = 0;
        while ($end < strlen($s)) {
            if ($map[ord($s[$end++]) - ord('A')]-- > 0) {
                $count--;
            }
            while ($count == 0) {
                if ($end - $begin < $d) {
                    $d = $end - $begin;
                    $head = $begin;
                }
                if ($map[ord($s[$begin++]) - ord('A')]++ == 0) {
                    $count++;
                }
            }
        }
        return $d == PHP_INT_MAX ? "" : substr($s, $head, $head + $d);
    }
}
