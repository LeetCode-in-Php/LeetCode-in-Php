<?php

namespace leetcode\g0001_0100\s0021_merge_two_sorted_lists;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #Linked_List #Recursion
// #Data_Structure_I_Day_7_Linked_List #Algorithm_I_Day_10_Recursion_Backtracking
// #Level_1_Day_3_Linked_List #Udemy_Linked_List #Top_Interview_150_Linked_List
// #Big_O_Time_O(m+n)_Space_O(m+n) #2023_12_07_Time_3_ms_(90.57%)_Space_19.4_MB_(12.46%)

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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    public function mergeTwoLists($l1, $l2) {
        $list = new ListNode(-1);
        $head = $list;
        while ($l1 !== null || $l2 !== null) {
            if ($l1 !== null && $l2 !== null) {
                if ($l1->val <= $l2->val) {
                    $list->next = new ListNode($l1->val);
                    $l1 = $l1->next;
                } else {
                    $list->next = new ListNode($l2->val);
                    $l2 = $l2->next;
                }
            } elseif ($l1 !== null) {
                $list->next = new ListNode($l1->val);
                $l1 = $l1->next;
            } else {
                $list->next = new ListNode($l2->val);
                $l2 = $l2->next;
            }

            $list = $list->next;
        }
        return $head->next;
    }
}
