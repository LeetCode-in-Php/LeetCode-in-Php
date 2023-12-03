<?php

namespace leetcode\g0001_0100\s0009_palindrome_number;

// #Easy #Math #Udemy_Integers #2023_08_09_Time_4_ms_(100.00%)_Space_43_MB_(43.42%)

class Solution {
    public function isPalindrome($x) {
        if ($x < 0) {
            return false;
        }

        $rev = 0;
        $localX = $x;

        while ($localX > 0) {
            $rev *= 10;
            $rev += $localX % 10;
            $localX /= 10;
            $localX = (int)$localX; // Ensure integer division
        }

        return $rev == $x;
    }
}
