<?php

namespace leetcode\g0101_0200\s0152_maximum_product_subarray;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMaxProduct() {
        $this->assertEquals((new Solution())->maxProduct(array(2, 3, -2, 4)), 6);
    }

    public function testMaxProduct2() {
        $this->assertEquals((new Solution())->maxProduct(array(-2, 0, -1)), 0);
    }
}
