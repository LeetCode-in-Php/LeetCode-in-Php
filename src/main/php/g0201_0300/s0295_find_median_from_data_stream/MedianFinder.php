<?php

namespace leetcode\g0201_0300\s0295_find_median_from_data_stream;

// #Hard #Top_100_Liked_Questions #Top_Interview_Questions #Sorting #Two_Pointers #Design
// #Heap_Priority_Queue #Data_Stream #Big_O_Time_O(n*log_n)_Space_O(n)
// #2023_12_23_Time_332_ms_(75.00%)_Space_49.3_MB_(75.00%)

class MedianFinder {
    private $maxHeap;
    private $minHeap;

    function __construct() {
        $this->maxHeap = new \SplMaxHeap();
        $this->minHeap = new \SplMinHeap();
    }

    /**
     * @param Integer $num
     * @return NULL
     */
    public function addNum($num) {
        if ($this->maxHeap->isEmpty() || $this->maxHeap->top() > $num) {
            $this->maxHeap->insert($num);
        } else {
            $this->minHeap->insert($num);
        }
        if (abs($this->maxHeap->count() - $this->minHeap->count()) > 1) {
            $this->balance($this->maxHeap, $this->minHeap);
        }
    }

    function balance($maxHeap, $minHeap) {
        $large = $maxHeap->count() > $minHeap->count() ? $maxHeap : $minHeap;
        $small = $maxHeap->count() > $minHeap->count() ? $minHeap : $maxHeap;
        $small->insert($large->extract());
    }

    /**
     * @return Float
     */
    public function findMedian() {
        $large = $this->maxHeap->count() > $this->minHeap->count() ? $this->maxHeap : $this->minHeap;
        $small = $this->maxHeap->count() > $this->minHeap->count() ? $this->minHeap : $this->maxHeap;
        if ($large->count() == $small->count()) {
            return ($large->top() + $small->top()) / 2.0;
        } else {
            return $large->top();
        }
    }
}
/**
 * Your MedianFinder object will be instantiated and called as such:
 * $obj = MedianFinder();
 * $obj->addNum($num);
 * $ret_2 = $obj->findMedian();
 */
