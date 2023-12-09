<?php

namespace leetcode\g0001_0100\s0031_next_permutation;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testNextPermutation() {
        $array = array(1, 2, 3);
        (new Solution())->nextPermutation($array);
        $this->assertEquals(array(1, 3, 2), $array);
    }

    public function testNextPermutation2() {
        $array = array(3, 2, 1);
        (new Solution())->nextPermutation($array);
        $this->assertEquals(array(1, 2, 3), $array);
    }

    public function testNextPermutation3() {
        $array = array(1, 1, 5);
        (new Solution())->nextPermutation($array);
        $this->assertEquals(array(1, 5, 1), $array);
    }
}
