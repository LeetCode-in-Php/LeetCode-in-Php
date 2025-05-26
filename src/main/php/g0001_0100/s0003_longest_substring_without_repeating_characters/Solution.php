<?php

namespace leetcode\g0001_0100\s0003_longest_substring_without_repeating_characters;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #String #Hash_Table #Sliding_Window
// #Algorithm_I_Day_6_Sliding_Window #Level_2_Day_14_Sliding_Window/Two_Pointer #Udemy_Strings
// #Top_Interview_150_Sliding_Window #Big_O_Time_O(n)_Space_O(1) #AI_can_be_used_to_solve_the_task
// #2023_12_03_Time_4_ms_(99.33%)_Space_19.1_MB_(68.83%)

class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    public function lengthOfLongestSubstring($s) {
        $lastIndices = array_fill(0, 256, -1);
        $maxLen = 0;
        $curLen = 0;
        $start = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            $cur = $s[$i];
            $curAscii = ord($cur);

            if ($lastIndices[$curAscii] < $start) {
                $lastIndices[$curAscii] = $i;
                $curLen++;
            } else {
                $lastIndex = $lastIndices[$curAscii];
                $start = $lastIndex + 1;
                $curLen = $i - $start + 1;
                $lastIndices[$curAscii] = $i;
            }

            if ($curLen > $maxLen) {
                $maxLen = $curLen;
            }
        }

        return $maxLen;
    }
}
