<?php

namespace leetcode\g0401_0500\s0416_partition_equal_subset_sum;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testCanPartition() {
        $this->assertEquals(true, (new Solution())->canPartition(array(1, 5, 11, 5)));
    }

    public function testCanPartition2() {
        $this->assertEquals(false, (new Solution())->canPartition(array(1, 2, 3, 5)));
    }
}
