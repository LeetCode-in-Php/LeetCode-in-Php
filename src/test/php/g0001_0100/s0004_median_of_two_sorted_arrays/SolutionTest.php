<?php

namespace leetcode\g0001_0100\s0004_median_of_two_sorted_arrays;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testFindMedianSortedArrays() {
        $this->assertEquals(2.0, (new Solution())->findMedianSortedArrays([1, 3], [2]));
    }

    public function testFindMedianSortedArrays2() {
        $this->assertEquals(2.5, (new Solution())->findMedianSortedArrays([1, 2], [3, 4]));
    }
}
