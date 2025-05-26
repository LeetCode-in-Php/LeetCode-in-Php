<?php

namespace leetcode\g0701_0800\s0763_partition_labels;

// #Medium #String #Hash_Table #Greedy #Two_Pointers #Data_Structure_II_Day_7_String
// #Big_O_Time_O(n)_Space_O(1) #2023_12_24_Time_5_ms_(83.33%)_Space_19.5_MB_(50.00%)

class Solution {
    /**
     * @param String $s
     * @return Integer[]
     */
    public function partitionLabels($s) {
        $letters = str_split($s);
        $result = array();
        $position = array_fill(0, 26, 0);
        for ($i = 0; $i < count($letters); $i++) {
            $position[ord($letters[$i]) - ord('a')] = $i;
        }
        $i = 0;
        $prev = -1;
        $max = 0;
        while ($i < count($letters)) {
            if ($position[ord($letters[$i]) - ord('a')] > $max) {
                $max = $position[ord($letters[$i]) - ord('a')];
            }
            if ($i == $max) {
                array_push($result, $i - $prev);
                $prev = $i;
            }
            $i++;
        }
        return $result;
    }
}
