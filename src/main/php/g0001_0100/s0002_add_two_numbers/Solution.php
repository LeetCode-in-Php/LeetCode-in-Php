<?php

namespace leetcode\g0001_0100\s0002_add_two_numbers;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Math #Linked_List #Recursion
// #Data_Structure_II_Day_10_Linked_List #Programming_Skills_II_Day_15
// #Top_Interview_150_Linked_List #Big_O_Time_O(max(N,M))_Space_O(max(N,M))
// #AI_can_be_used_to_solve_the_task #2023_11_29_Time_13_ms_(73.83%)_Space_19.2_MB_(38.29%)

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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    public function addTwoNumbers($l1, $l2) {
        $dummyHead = new ListNode(0);
        $p = $l1;
        $q = $l2;
        $curr = $dummyHead;
        $carry = 0;
        
        while ($p !== null || $q !== null) {
            $x = ($p !== null) ? $p->val : 0;
            $y = ($q !== null) ? $q->val : 0;
            $sum = $carry + $x + $y;
            $carry = (int)($sum / 10);
            
            $curr->next = new ListNode($sum % 10);
            $curr = $curr->next;
            
            if ($p !== null) {
                $p = $p->next;
            }
            if ($q !== null) {
                $q = $q->next;
            }
        }
        
        if ($carry > 0) {
            $curr->next = new ListNode($carry);
        }
        
        return $dummyHead->next;
    }
}
