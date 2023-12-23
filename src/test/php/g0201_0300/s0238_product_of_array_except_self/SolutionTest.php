<?php

namespace leetcode\g0201_0300\s0238_product_of_array_except_self;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testProductExceptSelf() {
        $this->assertEquals(array(24, 12, 8, 6), (new Solution())->productExceptSelf(array(1, 2, 3, 4)));
    }

    public function testProductExceptSelf2() {
        $this->assertEquals(array(0, 0, 9, 0, 0), (new Solution())->productExceptSelf(array(-1, 1, 0, -3, 3)));
    }
}
