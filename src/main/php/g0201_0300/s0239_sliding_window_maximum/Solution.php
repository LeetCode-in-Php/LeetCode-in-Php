<?php

namespace leetcode\g0201_0300\s0239_sliding_window_maximum;

// #Hard #Top_100_Liked_Questions #Top_Interview_Questions #Array #Heap_Priority_Queue
// #Sliding_Window #Queue #Monotonic_Queue #Udemy_Arrays #Big_O_Time_O(n*k)_Space_O(n+k)
// #2023_12_23_Time_518_ms_(100.00%)_Space_32.9_MB_(100.00%)

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    public function maxSlidingWindow($nums, $k) {
        $n = count($nums);
        $res = array_fill(0, $n - $k + 1, 0);
        $x = 0;
        $dq = new \SplDoublyLinkedList();
        $i = 0;
        $j = 0;
        while ($j < count($nums)) {
            while (!$dq->isEmpty() && $dq->top() < $nums[$j]) {
                $dq->pop();
            }
            $dq->push($nums[$j]);
            if ($j - $i + 1 == $k) {
                $res[$x] = $dq->bottom();
                ++$x;
                if ($dq->bottom() == $nums[$i]) {
                    $dq->shift();
                }
                ++$i;
            }
            ++$j;
        }
        return $res;
    }
}
