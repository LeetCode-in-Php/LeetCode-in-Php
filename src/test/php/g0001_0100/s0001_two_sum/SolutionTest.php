<?php

namespace leetcode\g0001_0100\s0001_two_sum;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testTwoSum() {
        assertThat((new Solution())->twoSum([2, 7, 11, 15], 9), equalTo([0, 1]));
    }

    public function testTwoSum2() {
        assertThat((new Solution())->twoSum([3, 2, 4], 6), equalTo([1, 2]));
    }

    public function testTwoSum3() {
        assertThat((new Solution())->twoSum([3, 3], 6), equalTo([0, 1]));
    }

    public function testTwoSum4() {
        assertThat((new Solution())->twoSum([3, 3], 7), equalTo([-1, -1]));
    }
}
