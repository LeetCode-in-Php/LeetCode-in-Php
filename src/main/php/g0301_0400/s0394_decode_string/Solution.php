<?php

namespace leetcode\g0301_0400\s0394_decode_string;

// #Medium #Top_100_Liked_Questions #String #Stack #Recursion #LeetCode_75_Stack
// #Level_1_Day_14_Stack #Udemy_Strings #Big_O_Time_O(n)_Space_O(n)
// #2023_12_24_Time_3_ms_(77.78%)_Space_19.7_MB_(11.11%)

class Solution {
    private $i = 0;

    /**
     * @param String $s
     * @return String
     */
    public function decodeString($s) {
        $count = 0;
        $sb = "";
        while ($this->i < strlen($s)) {
            $c = $s[$this->i];
            $this->i++;
            if (ctype_alpha($c)) {
                $sb .= $c;
            } elseif (ctype_digit($c)) {
                $count = $count * 10 + intval($c);
            } elseif ($c == ']') {
                break;
            } elseif ($c == '[') {
                // sub problem
                $repeat = $this->decodeString($s);
                while ($count > 0) {
                    $sb .= $repeat;
                    $count--;
                }
            }
        }
        return $sb;
    }
}
