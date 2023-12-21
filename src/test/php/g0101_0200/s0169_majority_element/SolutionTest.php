<?php

namespace leetcode\g0101_0200\s0169_majority_element;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMajorityElement() {
        $this->assertEquals(3, (new Solution())->majorityElement(array(3, 2, 3)));
    }

    public function testMajorityElement2() {
        $this->assertEquals(2, (new Solution())->majorityElement(array(2, 2, 1, 1, 1, 2, 2)));
    }
}
