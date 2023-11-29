<?php

namespace leetcode\com_github_leetcode;

class ListNode {
    public $val;
    public $next;

    public function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }

    public function toString() {
        $result = (string) $this->val;

        if ($this->next !== null) {
            $current = $this->next;

            while ($current->next !== null) {
                $result .= ', ' . $current->val;
                $current = $current->next;
            }

            $result .= ', ' . $current->val;
        }

        return $result;
    }
}
