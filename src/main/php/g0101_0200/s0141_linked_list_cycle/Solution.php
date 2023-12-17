<?php

namespace leetcode\g0101_0200\s0141_linked_list_cycle;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #Hash_Table #Two_Pointers #Linked_List
// #Data_Structure_I_Day_7_Linked_List #Udemy_Linked_List #Big_O_Time_O(N)_Space_O(1)
// #2023_12_16_Time_8_ms_(90.60%)_Space_22.7_MB_(47.65%)

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    public function hasCycle($head) {
        if ($head == null) {
            return false;
        }
        $fast = $head->next;
        $slow = $head;
        while ($fast != null && $fast->next != null) {
            if ($fast === $slow) {
                return true;
            }
            $fast = $fast->next->next;
            $slow = $slow->next;
        }
        return false;
    }
}
