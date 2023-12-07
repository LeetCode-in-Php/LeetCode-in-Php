<?php

namespace leetcode\g0001_0100\s0020_valid_parentheses;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #String #Stack
// #Data_Structure_I_Day_9_Stack_Queue #Udemy_Strings #Big_O_Time_O(n)_Space_O(n)
// #2023_12_07_Time_3_ms_(88.14%)_Space_19.1_MB_(76.99%)

class Solution {
    /**
     * @param String $s
     * @return Boolean
     */
    public function isValid($s) {
        $stack = [];
        $length = strlen($s);
        for ($i = 0; $i < $length; $i++) {
            $c = $s[$i];
            if ($c == '(' || $c == '[' || $c == '{') {
                array_push($stack, $c);
            } elseif (($c == ')' && !empty($stack) && end($stack) == '(')
                || ($c == '}' && !empty($stack) && end($stack) == '{')
                || ($c == ']' && !empty($stack) && end($stack) == '[')
            ) {
                array_pop($stack);
            } else {
                return false;
            }
        }
        return empty($stack);
    }
}
