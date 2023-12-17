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

    function __toString() {
        $result = array();
        $result2 = array();
        array_push($result2, strval($this->val));
        if ($this->random == null) {
            array_push($result2, "null");
        } else {
            array_push($result2, strval($this->random->val));
        }
        array_push($result, "[" . implode(",", $result2) . "]");
        $curr = $this->next;
        while ($curr != null) {
            $result3 = array();
            array_push($result3, strval($curr->val));
            if ($curr->random == null) {
                array_push($result3, "null");
            } else {
                $randomIndex = 0;
                $curr2 = $this;
                while ($curr2->next != null && $curr2 != $curr->random) {
                    $randomIndex += 1;
                    $curr2 = $curr2->next;
                }
                array_push($result3, strval($randomIndex));
            }
            array_push($result, "[" . implode(",", $result3) . "]");
            $curr = $curr->next;
        }
        return "[" . implode(",", $result) . "]";
    }
}
