<?php

namespace leetcode\g0001_0100\s0001_two_sum;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testTwoSum() {
        $this->assertThat((new Solution())->twoSum([2, 7, 11, 15], 9), $this->equalTo([0, 1]));
    }

    public function testTwoSum2() {
        $this->assertThat((new Solution())->twoSum([3, 2, 4], 6), $this->equalTo([1, 2]));
    }

    public function testTwoSum3() {
        $this->assertThat((new Solution())->twoSum([3, 3], 6), $this->equalTo([0, 1]));
    }

    public function testTwoSum4() {
        $this->assertThat((new Solution())->twoSum([3, 3], 7), $this->equalTo([-1, -1]));
    }
}
