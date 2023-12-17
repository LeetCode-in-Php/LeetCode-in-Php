<?php

namespace leetcode\g0101_0200\s0160_intersection_of_two_linked_lists;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #Hash_Table #Two_Pointers #Linked_List
// #Data_Structure_II_Day_11_Linked_List #Udemy_Linked_List #Big_O_Time_O(M+N)_Space_O(1)
// #2023_12_17_Time_30_ms_(81.67%)_Space_28.7_MB_(48.33%)

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
     * @param ListNode $headA
     * @param ListNode $headB
     * @return ListNode
     */
    public function getIntersectionNode($headA, $headB) {
        $node1 = $headA;
        $node2 = $headB;
        while ($node1 !== $node2) {
            $node1 = $node1 == null ? $headB : $node1->next;
            $node2 = $node2 == null ? $headA : $node2->next;
        }
        return $node1;
    }
}
