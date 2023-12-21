<?php

namespace leetcode\g0201_0300\s0215_kth_largest_element_in_an_array;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testFindKthLargest() {
        $this->assertEquals(5, (new Solution())->findKthLargest(array(3, 2, 1, 5, 6, 4), 2));
    }

    public function testFindKthLargest2() {
        $this->assertEquals(4, (new Solution())->findKthLargest(array(3, 2, 3, 1, 2, 4, 5, 5, 6), 4));
    }
}
