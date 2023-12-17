<?php

namespace leetcode\com_github_leetcode\random;

class Node {
    public $val;
    public $next;
    public $random;

    function __construct($val = 0, $next = null, $random = null) {
        $this->val = $val;
        $this->next = $next;
        $this->random = $random;
    }
}
