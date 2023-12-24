<?php

namespace leetcode\g0401_0500\s0438_find_all_anagrams_in_a_string;

// #Medium #Top_100_Liked_Questions #String #Hash_Table #Sliding_Window
// #Algorithm_II_Day_5_Sliding_Window #Programming_Skills_II_Day_12
// #Level_1_Day_12_Sliding_Window/Two_Pointer #Big_O_Time_O(n+m)_Space_O(1)
// #2023_12_24_Time_29_ms_(66.67%)_Space_20.4_MB_(16.67%)

class Solution {
    /**
     * @param String $s
     * @param String $p
     * @return Integer[]
     */
    public function findAnagrams($s, $p) {
        $map = array_fill(0, 26, 0);
        for ($i = 0; $i < strlen($p); ++$i) {
            $map[ord($p[$i]) - ord('a')]++;
        }
        $res = array();
        $i = 0;
        $j = 0;
        while ($i < strlen($s)) {
            $idx = ord($s[$i]) - ord('a');
            // add the new character
            $map[$idx]--;
            // if the length is greater than windows length, pop the left charcater in the window
            if ($i >= strlen($p)) {
                $map[ord($s[$j++]) - ord('a')]++;
            }
            $finish = true;
            for ($k = 0; $k < 26; $k++) {
                // if it is not an anagram of string p
                if ($map[$k] != 0) {
                    $finish = false;
                    break;
                }
            }
            if ($i >= strlen($p) - 1 && $finish) {
                array_push($res, $j);
            }
            $i++;
        }
        return $res;
    }
}
