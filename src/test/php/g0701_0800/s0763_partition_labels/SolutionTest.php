<?php

namespace leetcode\g0701_0800\s0763_partition_labels;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testPartitionLabels() {
        $this->assertEquals(
            [9, 7, 8],
            (new Solution())->partitionLabels("ababcbacadefegdehijhklij")
        );
    }

    public function testPartitionLabels2() {
        $this->assertEquals(
            [10],
            (new Solution())->partitionLabels("eccbbbbdec")
        );
    }
}
