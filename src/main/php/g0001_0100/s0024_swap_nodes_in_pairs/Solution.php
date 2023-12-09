<?php

namespace leetcode\g0001_0100\s0024_swap_nodes_in_pairs;

// #Medium #Top_100_Liked_Questions #Linked_List #Recursion #Data_Structure_II_Day_12_Linked_List
// #Udemy_Linked_List #Big_O_Time_O(n)_Space_O(1)
// #2023_12_07_Time_3_ms_(85.71%)_Space_19.2_MB_(38.10%)

use leetcode\com_github_leetcode\ListNode;

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {
    /**
     * @param ListNode $head
     * @return ListNode
     */
    public function swapPairs($head) {
        $output = new ListNode(0);
        $output->next = $head;
        $point = $output;
        while ($point->next != null && $point->next->next != null) {
            $point1 = $point->next;
            $point2 = $point->next->next;
            $point->next = $point2;
            $point1->next = $point2->next;
            $point2->next = $point1;
            $point = $point1;
        }
        return $output->next;
    }
}
