<?php

namespace leetcode\g0001_0100\s0006_zigzag_conversion;

// #Medium #String #2023_12_03_Time_12_ms_(80.63%)_Space_19.3_MB_(57.66%)

class Solution {
    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        if ($numRows === 1) {
            return $s;
        }

        $n = $numRows - 1;
        $len = strlen($s);
        $zigzag = array_fill(0, $n, '');

        for ($i = 0; $i < $len; ++$i) {
            $zigzag[$n - abs($i % (2 * $n) - $n)] .= $s[$i];
        }

        return implode('', $zigzag);
    }
}
