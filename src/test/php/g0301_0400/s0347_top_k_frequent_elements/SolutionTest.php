<?php

namespace leetcode\g0301_0400\s0347_top_k_frequent_elements;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testTopKFrequent() {
        $this->assertEquals(array(1, 2), (new Solution())->topKFrequent(array(1, 1, 1, 2, 2, 3), 2));
    }

    public function testTopKFrequent2() {
        $this->assertEquals(array(1), (new Solution())->topKFrequent(array(1), 1));
    }
}
