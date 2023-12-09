<?php

namespace leetcode\g0001_0100\s0008_string_to_integer_atoi;

// #Medium #Top_Interview_Questions #String #2023_12_03_Time_3_ms_(93.18%)_Space_19.1_MB_(36.36%)

class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    public function myAtoi($s) {
        $pos = 0;
        $res = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if (ctype_digit($s[$i])) {
                if ($res == 0 && $pos == 0) {
                    $pos++;
                }
                $res = $pos * (abs($res * 10) + $s[$i]);
                if ($res >= 2147483647) {
                    return 2147483647;
                }
                if ($res <= -2147483648) {
                    return -2147483648;
                }
            } else {
                if ($s[$i] == ' ' && $pos == 0) {
                    continue;
                }
                if ($s[$i] == '-' && $pos == 0) {
                    $pos--;
                    continue;
                }
                if ($s[$i] == '+' && $pos == 0) {
                    $pos++;
                    continue;
                }
                break;
            }
        }
        return $res;
    }
}
