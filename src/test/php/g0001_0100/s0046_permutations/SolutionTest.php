<?php

namespace leetcode\g0001_0100\s0046_permutations;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testPermute() {
        $expected = array(array(1, 2, 3), array(1, 3, 2), array(2, 1, 3), array(2, 3, 1),
            array(3, 1, 2), array(3, 2, 1));
        $this->assertEquals($expected, (new Solution())->permute(array(1, 2, 3)));
    }

    public function testPermute2() {
        $expected = array(array(0, 1), array(1, 0));
        $this->assertEquals($expected, (new Solution())->permute(array(0, 1)));
    }

    public function testPermute3() {
        $expected = array(array(1));
        $this->assertEquals($expected, (new Solution())->permute(array(1)));
    }
}
