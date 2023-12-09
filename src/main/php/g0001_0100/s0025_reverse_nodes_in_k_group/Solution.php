<?php

namespace leetcode\g0001_0100\s0025_reverse_nodes_in_k_group;

// #Hard #Top_100_Liked_Questions #Linked_List #Recursion #Data_Structure_II_Day_13_Linked_List
// #Udemy_Linked_List #Big_O_Time_O(n)_Space_O(k)
// #2023_12_07_Time_3_ms_(100.00%)_Space_20.4_MB_(68.18%)

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
     * @param Integer $k
     * @return ListNode
     */
    public function reverseKGroup($head, $k) {
        if ($this->countNodesInList($head) < $k || $head->next == null || $head == null) {
            return $head;
        } else {
            $curr = $head;
            $prev = null;
            $next = $curr->next;
            $index = 0;
            while ($curr != null && $index < $k) {
                $curr->next = $prev;
                $prev = $curr;
                $curr = $next;
                $next = $next->next;
                $index++;
            }
            // now $prev is the first group inverted
            // and next is pointing to the start of next group to be inverted
            if ($curr != null) {
                $head->next = $this->reverseKGroup($curr, $k);
            }
            return $prev;
        }
    }

    function countNodesInList($head) {
        $count = 0;
        $p = $head;
        while ($p != null) {
            $count++;
            $p = $p->next;
        }
        return $count;
    }
}
