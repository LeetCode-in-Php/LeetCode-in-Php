<?php

namespace leetcode\g0001_0100\s0006_zigzag_conversion;

// #Medium #String #Top_Interview_150_Array/String
// #2023_12_03_Time_12_ms_(80.63%)_Space_19.3_MB_(57.66%)

class Solution {
    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    public function convert($s, $numRows) {
        if ($numRows == 1) {
            return $s;
        }
        $row = 0;
        $col = 0;
        $dir = 'down';
        for ($i = 0; $i < strlen($s); $i++) {
            $string[$row][] = $s[$i];
            if ($row < $numRows - 1 && $dir == 'down') {
                $row++;
            } elseif ($row == $numRows - 1 && $dir == 'down') {
                $row--;
                $dir = 'up';
                $col++;
            } elseif ($row > 0) {
                $row--;
                $col++;
            } else {
                $dir = 'down';
                $row++;
            }
        }
        return implode(array_merge(...$string));
    }
}
