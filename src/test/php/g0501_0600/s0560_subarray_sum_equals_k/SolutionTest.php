<?php

namespace leetcode\g0501_0600\s0560_subarray_sum_equals_k;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSubarraySum() {
        $this->assertEquals(2, (new Solution())->subarraySum(array(1, 1, 1), 2));
    }

    public function testSubarraySum2() {
        $this->assertEquals(2, (new Solution())->subarraySum(array(1, 2, 3), 3));
    }
}
