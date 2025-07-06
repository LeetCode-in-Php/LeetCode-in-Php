<?php

namespace leetcode\g0001_0100\s0009_palindrome_number;

// #Easy #Math #Udemy_Integers #Top_Interview_150_Math #Big_O_Time_O(log10(x))_Space_O(1)
// #2023_12_03_Time_23_ms_(76.73%)_Space_19.4_MB_(5.93%)

class Solution {
    /**
     * @param Integer $x
     * @return Boolean
     */
    public function isPalindrome($x) {
        if ($x < 0) {
            return false;
        }
        $x = (string)$x;
        $size = strlen($x);
        if ($size % 2 == 1) {
            $c = ($size - 1) / 2;
            for ($i = 0; $i < $c; $i++) {
                if ($i == $c) {
                    return true;
                }
                if ($x[$i] !== $x[$size - ($i + 1)]) {
                    return false;
                }
            }
            return true;
        } else {
            $c = $size / 2;
            for ($i = 0; $i < $c; $i++) {
                if ($x[$i] !== $x[$size - ($i + 1)]) {
                    return false;
                }
            }
            return true;
        }
    }
}
