<?php

namespace leetcode\g0201_0300\s0207_course_schedule;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Depth_First_Search
// #Breadth_First_Search #Graph #Topological_Sort #Top_Interview_150_Graph_General
// #Big_O_Time_O(N)_Space_O(N) #2023_12_21_Time_25_ms_(89.29%)_Space_22.3_MB_(100.00%)

class Solution {
    const WHITE = 0;
    const GRAY = 1;
    const BLACK = 2;

    /**
     * @param Integer $numCourses
     * @param Integer[][] $prerequisites
     * @return Boolean
     */
    public function canFinish($numCourses, $prerequisites) {
        $adj = array_fill(0, $numCourses, []);
        foreach ($prerequisites as $pre) {
            array_push($adj[$pre[1]], $pre[0]);
        }
        $colors = array_fill(0, $numCourses, self::WHITE);
        for ($i = 0; $i < $numCourses; $i++) {
            if ($colors[$i] == self::WHITE && !empty($adj[$i]) && $this->hasCycle($adj, $i, $colors)) {
                return false;
            }
        }
        return true;
    }

    private function hasCycle($adj, $node, &$colors) {
        $colors[$node] = self::GRAY;
        foreach ($adj[$node] as $nei) {
            if ($colors[$nei] == self::GRAY) {
                return true;
            }
            if ($colors[$nei] == self::WHITE && $this->hasCycle($adj, $nei, $colors)) {
                return true;
            }
        }
        $colors[$node] = self::BLACK;
        return false;
    }
}
