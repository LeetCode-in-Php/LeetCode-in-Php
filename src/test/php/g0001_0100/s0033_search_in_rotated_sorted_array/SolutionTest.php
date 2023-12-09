<?php

namespace leetcode\g0001_0100\s0033_search_in_rotated_sorted_array;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSearch() {
        $this->assertEquals(4, (new Solution())->search(array(4, 5, 6, 7, 0, 1, 2), 0));
    }

    public function testSearch2() {
        $this->assertEquals(-1, (new Solution())->search(array(4, 5, 6, 7, 0, 1, 2), 3));
    }

    public function testSearch3() {
        $this->assertEquals(-1, (new Solution())->search(array(1), 0));
    }
}
