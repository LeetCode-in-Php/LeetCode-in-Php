<?php

namespace leetcode\g0001_0100\s0006_zigzag_conversion;

// #Medium #String

class Solution {
    public function longestPalindrome($s) {
        $newStr = array_fill(0, strlen($s) * 2 + 1, 0);
        $newStr[0] = '#';

        for ($i = 0; $i < strlen($s); $i++) {
            $newStr[2 * $i + 1] = $s[$i];
            $newStr[2 * $i + 2] = '#';
        }

        $dp = array_fill(0, count($newStr), 0);
        $friendCenter = 0;
        $friendRadius = 0;
        $lpsCenter = 0;
        $lpsRadius = 0;

        for ($i = 0; $i < count($newStr); $i++) {
            $dp[$i] = ($friendCenter + $friendRadius > $i) ?
                min($dp[2 * $friendCenter - $i], ($friendCenter + $friendRadius) - $i) : 1;

            while ($i + $dp[$i] < count($newStr) &&
                $i - $dp[$i] >= 0 &&
                $newStr[$i + $dp[$i]] == $newStr[$i - $dp[$i]]) {
                $dp[$i]++;
            }

            if ($friendCenter + $friendRadius < $i + $dp[$i]) {
                $friendCenter = $i;
                $friendRadius = $dp[$i];
            }

            if ($lpsRadius < $dp[$i]) {
                $lpsCenter = $i;
                $lpsRadius = $dp[$i];
            }
        }

        $start = ($lpsCenter - $lpsRadius + 1) / 2;
        $end = ($lpsCenter + $lpsRadius - 1) / 2;

        return substr($s, $start, $end - $start + 1);
    }
}
