<?php

namespace leetcode\g0201_0300\s0234_palindrome_linked_list;

// #Easy #Top_100_Liked_Questions #Two_Pointers #Stack #Linked_List #Recursion
// #Level_2_Day_3_Linked_List #Udemy_Linked_List #Big_O_Time_O(n)_Space_O(1)
// #2023_12_23_Time_123_ms_(95.45%)_Space_50.6_MB_(75.00%)

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
     * @return Boolean
     */
    public function isPalindrome($head) {
        $array = [];
        while ($head) {
            $array[] = $head->val;
            $head = $head->next;
        }
        $cnt = count($array);
        for ($x = 0; $x < $cnt / 2; $x++) {
            $yKey = $cnt - 1 - $x;

            if ($array[$x] !== $array[$yKey]) {
                return false;
            }
        }
        return true;
    }
}
