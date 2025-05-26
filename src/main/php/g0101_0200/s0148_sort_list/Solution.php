<?php

namespace leetcode\g0101_0200\s0148_sort_list;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Sorting #Two_Pointers #Linked_List
// #Divide_and_Conquer #Merge_Sort #Level_2_Day_4_Linked_List #Top_Interview_150_Divide_and_Conquer
// #Big_O_Time_O(log(N))_Space_O(log(N)) #2023_12_17_Time_63_ms_(97.30%)_Space_38.1_MB_(81.08%)

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
    public function sortList($head) {
        $sortArray = [];
        $sortedHead = $head;
        while (!is_null($sortedHead)) {
            $sortArray[] = $sortedHead->val;
            $sortedHead = $sortedHead->next;
        }
        unset($sortedHead);
        sort($sortArray);
        $newHead = $head;
        for ($i = 0; $i < count($sortArray); $i++) {
            $newHead->val = $sortArray[$i];
            $newHead = $newHead->next;
        }
        unset($newHead);
        return $head;
    }
}
