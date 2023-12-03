<?php

namespace leetcode\g0001_0100\s0007_reverse_integer;

// #Medium #Top_Interview_Questions #Math #Udemy_Integers

class Solution {
    public function reverse($x) {
        $rev = 0;
        
        while ($x != 0) {
            $rev = ($rev * 10) + ($x % 10);
            $x = (int)($x / 10);
        }

        if ($rev > PHP_INT_MAX || $rev < PHP_INT_MIN) {
            return 0;
        }

        return (int)$rev;
    }
}
