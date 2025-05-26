<?php

namespace leetcode\g0201_0300\s0206_reverse_linked_list;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #Linked_List #Recursion
// #LeetCode_75_LinkedList #Data_Structure_I_Day_8_Linked_List
// #Algorithm_I_Day_10_Recursion_Backtracking #Level_1_Day_3_Linked_List #Udemy_Linked_List
// #Big_O_Time_O(N)_Space_O(1) #2023_12_21_Time_0_ms_(100.00%)_Space_20.4_MB_(87.88%)

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
    public function reverseList($head) {
        $prev = null;
        $curr = $head;
        while ($curr != null) {
            $next = $curr->next;
            $curr->next = $prev;
            $prev = $curr;
            $curr = $next;
        }
        return $prev;
    }
}
