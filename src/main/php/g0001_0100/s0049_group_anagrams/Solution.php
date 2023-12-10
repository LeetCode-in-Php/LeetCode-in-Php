<?php

namespace leetcode\g0001_0100\s0049_group_anagrams;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #String #Hash_Table #Sorting
// #Data_Structure_II_Day_8_String #Programming_Skills_II_Day_11 #Udemy_Strings
// #Big_O_Time_O(n*k_log_k)_Space_O(n) #2023_12_10_Time_27_ms_(80.85%)_Space_25.8_MB_(27.66%)

class Solution {
    /**
     * @param String[] $strs
     * @return String[][]
     */
    public function groupAnagrams($strs) {
        $hm = array();
        foreach ($strs as $s) {
            $ch = str_split($s);
            sort($ch);
            $temp = implode($ch);
            if (!array_key_exists($temp, $hm)) {
                $hm[$temp] = array();
            }
            array_push($hm[$temp], $s);
        }
        return array_values($hm);
    }
}
