<?php

namespace leetcode\g0001_0100\s0023_merge_k_sorted_lists;

// #Hard #Top_100_Liked_Questions #Top_Interview_Questions #Heap_Priority_Queue #Linked_List
// #Divide_and_Conquer #Merge_Sort #Big_O_Time_O(k*n*log(k))_Space_O(log(k))
// #2023_12_07_Time_19_ms_(84.54%)_Space_27.4_MB_(8.25%)

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
     * @param ListNode[] $lists
     * @return ListNode
     */
    public function mergeKLists($lists) {
        $heap = new \SplMinHeap();
        $head = [];
        foreach ($lists as $list) {
            $head = $list;
            while ($head) {
                $heap->insert($head->val);
                $head = $head->next;
            }
        }
        if (!$heap->isEmpty()) {
            $head = new ListNode($heap->extract());
            $curr = $head;
            while ($heap->valid()) {
                $node = new ListNode($heap->extract());
                $curr->next = $node;
                $curr = $node;
            }
        }
        return $head;
    }
}
