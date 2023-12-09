<?php

namespace leetcode\g0001_0100\s0035_search_insert_position;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSearchInsert() {
        $this->assertEquals(2, (new Solution())->searchInsert(array(1, 3, 5, 6), 5));
    }

    public function testSearchInsert2() {
        $this->assertEquals(1, (new Solution())->searchInsert(array(1, 3, 5, 6), 2));
    }

    public function testSearchInsert3() {
        $this->assertEquals(4, (new Solution())->searchInsert(array(1, 3, 5, 6), 7));
    }
}
