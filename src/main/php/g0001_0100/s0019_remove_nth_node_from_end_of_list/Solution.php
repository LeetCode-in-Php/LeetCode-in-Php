<?php

namespace leetcode\g0001_0100\s0019_remove_nth_node_from_end_of_list;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Two_Pointers #Linked_List
// #Algorithm_I_Day_5_Two_Pointers #Level_2_Day_3_Linked_List #Top_Interview_150_Linked_List
// #Big_O_Time_O(L)_Space_O(L) #2023_12_07_Time_4_ms_(81.93%)_Space_18.9_MB_(91.57%)

use leetcode\com_github_leetcode\ListNode;

/*
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
    private $n;

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    public function removeNthFromEnd($head, $n) {
        $this->n = $n;
        $node = new ListNode(0, $head);
        $this->removeNth($node);
        return $node->next;
    }

    private function removeNth($node) {
        if ($node->next === null) {
            return;
        }
        $this->removeNth($node->next);
        $this->n--;
        if ($this->n == 0) {
            $node->next = $node->next->next;
        }
    }
}
