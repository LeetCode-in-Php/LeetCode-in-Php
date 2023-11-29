<?php

namespace leetcode\com_github_leetcode;

use leetcode\com_github_leetcode\ListNode;

class LinkedListUtils {
    public static function constructLinkedList($nums) {
        if ($nums === null || count($nums) === 0) {
            return null;
        }
        $pre = new ListNode(-1);
        $head = new ListNode($nums[0]);
        $pre->next = $head;
        for ($i = 1; $i < count($nums); $i++) {
            $head->next = new ListNode($nums[$i]);
            $head = $head->next;
        }
        return $pre->next;
    }

    public static function createSinglyLinkedList($listValues) {
        if ($listValues === null || count($listValues) === 0) {
            throw new InvalidArgumentException(
                "Please pass in a valid listValues to create a singly linked list."
            );
        }
        $head = new ListNode($listValues[0]);
        $tmp = $head;
        for ($i = 1; $i < count($listValues); $i++) {
            $next = new ListNode($listValues[$i]);
            $tmp->next = $next;
            $tmp = $tmp->next;
        }
        return $head;
    }
}
