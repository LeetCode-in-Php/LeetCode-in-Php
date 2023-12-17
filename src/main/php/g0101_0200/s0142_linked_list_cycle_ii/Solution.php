<?php

namespace leetcode\g0101_0200\s0142_linked_list_cycle_ii;

// #Medium #Top_100_Liked_Questions #Hash_Table #Two_Pointers #Linked_List
// #Data_Structure_II_Day_10_Linked_List #Level_1_Day_4_Linked_List #Udemy_Linked_List
// #Big_O_Time_O(N)_Space_O(1) #2023_12_16_Time_7_ms_(100.00%)_Space_21.9_MB_(60.00%)

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
     * @return ListNode
     */
    public function detectCycle($head) {
        if ($head == null || $head->next == null) {
            return null;
        }
        $slow = $head;
        $fast = $head;
        while ($fast != null && $fast->next != null) {
            $fast = $fast->next->next;
            $slow = $slow->next;
            if ($slow === $fast) {
                break;
            }
        }
        if ($fast == null || $fast->next == null) {
            return null;
        }
        $slow = $head;
        while ($slow !== $fast) {
            $slow = $slow->next;
            $fast = $fast->next;
        }
        return $slow;
    }
}
