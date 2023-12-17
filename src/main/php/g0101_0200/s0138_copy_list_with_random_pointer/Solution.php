<?php

namespace leetcode\g0101_0200\s0138_copy_list_with_random_pointer;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Hash_Table #Linked_List
// #Programming_Skills_II_Day_14 #Udemy_Linked_List #Big_O_Time_O(N)_Space_O(N)
// #2023_12_17_Time_2300_ms_(60.00%)_Space_22.7_MB_(60.00%)

use leetcode\com_github_leetcode\random\Node;

/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $next = null;
 *     public $random = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->next = null;
 *         $this->random = null;
 *     }
 * }
 */
class Solution {
    /**
     * @param Node $head
     * @return Node
     */
    public function copyRandomList($head) {
        if ($head == null) {
            return null;
        }
        $curr = $head;
        while ($curr != null) {
            $clonedNode = new Node($curr->val);
            $clonedNode->next = $curr->next;
            $curr->next = $clonedNode;
            $curr = $clonedNode->next;
        }
        $curr = $head;
        while ($curr != null) {
            if ($curr->random != null) {
                $curr->next->random = $curr->random->next;
            } else {
                $curr->next->random = null;
            }
            $curr = $curr->next->next;
        }
        $curr = $head;
        $newHead = null;
        while ($curr != null) {
            if ($newHead == null) {
                $clonedNode = $curr->next;
                $newHead = $clonedNode;
            } else {
                $clonedNode = $curr->next;
            }
            $curr->next = $clonedNode->next;
            if ($curr->next != null) {
                $clonedNode->next = $curr->next->next;
            } else {
                $clonedNode->next = null;
            }
            $curr = $curr->next;
        }
        return $newHead;
    }
}
