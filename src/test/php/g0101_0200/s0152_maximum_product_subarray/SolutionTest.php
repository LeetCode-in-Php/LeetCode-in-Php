<?php

namespace leetcode\g0101_0200\s0152_maximum_product_subarray;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMaxProduct() {
        $this->assertEquals(6, (new Solution())->maxProduct(array(2, 3, -2, 4)));
    }

    public function testMaxProduct2() {
        $this->assertEquals(0, (new Solution())->maxProduct(array(-2, 0, -1)));
    }
}
