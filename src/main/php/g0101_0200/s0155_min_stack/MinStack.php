<?php

namespace leetcode\g0101_0200\s0155_min_stack;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #Stack #Design
// #Data_Structure_II_Day_14_Stack_Queue #Programming_Skills_II_Day_18 #Level_2_Day_16_Design
// #Udemy_Design #Big_O_Time_O(1)_Space_O(N)
// #2023_12_17_Time_19_ms_(100.00%)_Space_25.9_MB_(33.33%)

class Node {
    public $min;
    public $data;
    public $nextNode;
    public $previousNode;

    function __construct($min, $data, $previousNode, $nextNode) {
        $this->min = $min;
        $this->data = $data;
        $this->previousNode = $previousNode;
        $this->nextNode = $nextNode;
    }
}

class MinStack {
    private $currentNode;

    function __construct() {
        // no initialization needed.
    }

    /**
     * @param Integer $val
     * @return NULL
     */
    public function push($val) {
        if ($this->currentNode == null) {
            $this->currentNode = new Node($val, $val, null, null);
        } else {
            $this->currentNode->nextNode = new Node(min($this->currentNode->min, $val), $val, $this->currentNode, null);
            $this->currentNode = $this->currentNode->nextNode;
        }
    }

    /**
     * @return NULL
     */
    public function pop() {
        $this->currentNode = $this->currentNode->previousNode;
    }

    /**
     * @return Integer
     */
    public function top() {
        return $this->currentNode->data;
    }

    /**
     * @return Integer
     */
    function getMin() {
        return $this->currentNode->min;
    }
}
