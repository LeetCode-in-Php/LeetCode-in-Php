<?php

namespace leetcode\g0001_0100\s0015_3sum;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testThreeSum() {
        $input = [-1, 0, 1, 2, -1, -4];
        $expected = [[-1, -1, 2], [-1, 0, 1]];
        $this->assertEquals($expected, (new Solution())->threeSum($input));
    }

    public function testThreeSum2() {
        $input = [];
        $expected = [];
        $this->assertEquals($expected, (new Solution())->threeSum($input));
    }

    public function testThreeSum3() {
        $input = [0];
        $expected = [];
        $this->assertEquals($expected, (new Solution())->threeSum($input));
    }
}
