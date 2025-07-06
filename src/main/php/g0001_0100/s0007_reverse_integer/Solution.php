<?php

namespace leetcode\g0001_0100\s0007_reverse_integer;

// #Medium #Top_Interview_Questions #Math #Udemy_Integers #Big_O_Time_O(log10(x))_Space_O(1)
// #2023_12_03_Time_3_ms_(90.99%)_Space_19.2_MB_(44.23%)

class Solution {
    /**
     * @param Integer $x
     * @return Integer
     */
    public function reverse($x) {
        $ls_negative = '';
        if (strpos($x, '-') === 0) {
            $ls_negative = substr($x, 0, 1);
            $x = substr($x, 1);
        }
        $la_chars = str_split($x);
        $la_chars = array_reverse($la_chars);
        $li_result = intval($ls_negative . implode('', $la_chars));
        if ($li_result > 2147483647 || $li_result < -2147483647) {
            $li_result = 0;
        }
        return $li_result;
    }
}
