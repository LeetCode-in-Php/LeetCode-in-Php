<?php

namespace leetcode\g0101_0200\s0153_find_minimum_in_rotated_sorted_array;

class SolutionTest extends TestCase {
    public function testFindMin() {
        $this->assertEquals((new Solution())->findMin(array(3, 4, 5, 1, 2)), 1);
    }

    public function testFindMin2() {
        $this->assertEquals((new Solution())->findMin(array(4, 5, 6, 7, 0, 1, 2)), 0);
    }

    public function testFindMin3() {
        $this->assertEquals((new Solution())->findMin(array(11, 13, 15, 17)), 11);
    }
}
