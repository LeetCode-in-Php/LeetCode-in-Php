<?php

namespace leetcode\g0101_0200\s0102_binary_tree_level_order_traversal;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Breadth_First_Search #Tree
// #Binary_Tree #Data_Structure_I_Day_11_Tree #Level_1_Day_6_Tree #Udemy_Tree_Stack_Queue
// #Top_Interview_150_Binary_Tree_BFS #Big_O_Time_O(N)_Space_O(N)
// #2023_12_11_Time_4_ms_(96.08%)_Space_20.9_MB_(50.98%)

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {
    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder($root) {
        $result = array();
        if ($root == null) {
            return $result;
        }
        $queue = new \SplQueue();
        $queue->enqueue($root);
        $queue->enqueue(null);
        $level = array();
        while (!$queue->isEmpty()) {
            $root = $queue->dequeue();
            while (!$queue->isEmpty() && $root != null) {
                array_push($level, $root->val);
                if ($root->left != null) {
                    $queue->enqueue($root->left);
                }
                if ($root->right != null) {
                    $queue->enqueue($root->right);
                }
                $root = $queue->dequeue();
            }
            array_push($result, $level);
            $level = array();
            if (!$queue->isEmpty()) {
                $queue->enqueue(null);
            }
        }
        return $result;
    }
}
