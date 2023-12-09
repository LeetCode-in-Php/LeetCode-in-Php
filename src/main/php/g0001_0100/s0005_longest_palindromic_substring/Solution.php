<?php

namespace leetcode\g0001_0100\s0005_longest_palindromic_substring;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #String #Dynamic_Programming
// #Data_Structure_II_Day_9_String #Algorithm_II_Day_14_Dynamic_Programming
// #Dynamic_Programming_I_Day_17 #Udemy_Strings #Big_O_Time_O(n)_Space_O(n)
// #2023_12_03_Time_13_ms_(98.57%)_Space_19.4_MB_(12.54%)

class Solution {
    /**
     * @param String $s
     * @return String
     */
    public function longestPalindrome($s): string {
        if (($length = strlen($s)) <= 1) {
            return $s;
        }
        if (strrev($s) === $s) {
            return $s;
        }

        $max_length = 1;
        for ($i = 0; $i < $length; ++$i) {
            for ($len = $max_length; $len <= $length; ++$len) {
                $start = $i - ($len >> 1);
                if ($start < 0 || $start + $len > $length) {
                    break;
                }
                $substr = substr($s, $start, $len);
                if ($substr === strrev($substr)) {
                    $str = $substr;
                    $max_length = $len;
                } elseif ($max_length + 1 < $len) {
                    break;
                }
            }
        }

        return $str;
    }
}
