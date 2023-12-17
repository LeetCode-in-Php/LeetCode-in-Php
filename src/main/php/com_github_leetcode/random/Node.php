<?php

namespace leetcode\com_github_leetcode\random;

class Node {
    public $val;
    public $next;
    public $random;

    function __construct($val = 0, $next = NULL, $random = NULL) {
        $this->val = $val;
        $this->next = $next;
        $this->random = $random;
    }
}
