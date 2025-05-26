<?php

namespace leetcode\g0101_0200\s0200_number_of_islands;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Depth_First_Search
// #Breadth_First_Search #Matrix #Union_Find
// #Algorithm_II_Day_6_Breadth_First_Search_Depth_First_Search
// #Graph_Theory_I_Day_1_Matrix_Related_Problems #Level_1_Day_9_Graph/BFS/DFS #Udemy_Graph
// #Top_Interview_150_Graph_General #Big_O_Time_O(M*N)_Space_O(M*N)
// #2023_12_21_Time_97_ms_(82.05%)_Space_35.3_MB_(100.00%)

class Solution {
    /**
     * @param String[][] $grid
     * @return Integer
     */
    public function numIslands($grid) {
        $islands = 0;
        if ($grid != null && !empty($grid) && count($grid[0]) != 0) {
            for ($i = 0; $i < count($grid); $i++) {
                for ($j = 0; $j < count($grid[0]); $j++) {
                    if ($grid[$i][$j] == '1') {
                        $this->dfs($grid, $i, $j);
                        $islands++;
                    }
                }
            }
        }
        return $islands;
    }

    private function dfs(&$grid, $x, $y) {
        if ($x < 0 || count($grid) <= $x || $y < 0 || count($grid[0]) <= $y || $grid[$x][$y] != '1') {
            return;
        }
        $grid[$x][$y] = 'x';
        $this->dfs($grid, $x + 1, $y);
        $this->dfs($grid, $x - 1, $y);
        $this->dfs($grid, $x, $y + 1);
        $this->dfs($grid, $x, $y - 1);
    }
}
