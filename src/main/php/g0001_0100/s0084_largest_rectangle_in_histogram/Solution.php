<?php

namespace leetcode\g0001_0100\s0084_largest_rectangle_in_histogram;

// #Hard #Top_100_Liked_Questions #Top_Interview_Questions #Array #Stack #Monotonic_Stack
// #Big_O_Time_O(n_log_n)_Space_O(log_n) #2023_12_10_Time_298_ms_(100.00%)_Space_31.6_MB_(80.00%)

class Solution {
    /**
     * @param Integer[] $heights
     * @return Integer
     */
    public function largestRectangleArea($heights) {
        return $this->largestArea($heights, 0, count($heights));
    }

    private function largestArea($a, $start, $limit) {
        if ($a == null || empty($a)) {
            return 0;
        }
        if ($start == $limit) {
            return 0;
        }
        if ($limit - $start == 1) {
            return $a[$start];
        }
        if ($limit - $start == 2) {
            $maxOfTwoBars = max($a[$start], $a[$start + 1]);
            $areaFromTwo = min($a[$start], $a[$start + 1]) * 2;
            return max($maxOfTwoBars, $areaFromTwo);
        }
        if ($this->checkIfSorted($a, $start, $limit)) {
            $maxWhenSorted = 0;
            for ($i = $start; $i < $limit; $i++) {
                if ($a[$i] * ($limit - $i) > $maxWhenSorted) {
                    $maxWhenSorted = $a[$i] * ($limit - $i);
                }
            }
            return $maxWhenSorted;
        } else {
            $minInd = $this->findMinInArray($a, $start, $limit);
            return $this->maxOfThreeNums(
                $this->largestArea($a, $start, $minInd),
                $a[$minInd] * ($limit - $start),
                $this->largestArea($a, $minInd + 1, $limit));
        }
    }

    private function findMinInArray($a, $start, $limit) {
        $min = PHP_INT_MAX;
        $minIndex = -1;
        for ($index = $start; $index < $limit; $index++) {
            if ($a[$index] < $min) {
                $min = $a[$index];
                $minIndex = $index;
            }
        }
        return $minIndex;
    }

    private function checkIfSorted($a, $start, $limit) {
        for ($i = $start + 1; $i < $limit; $i++) {
            if ($a[$i] < $a[$i - 1]) {
                return false;
            }
        }
        return true;
    }

    private function maxOfThreeNums($a, $b, $c) {
        return max(max($a, $b), $c);
    }
}
