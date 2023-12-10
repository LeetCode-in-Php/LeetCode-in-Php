<?php

namespace leetcode\g0001_0100\s0096_unique_binary_search_trees;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testNumTrees() {
        $solution = new Solution();
        $this->assertEquals(5, $solution->numTrees(3));
    }

    public function testNumTrees2() {
        $solution = new Solution();
        $this->assertEquals(1, $solution->numTrees(1));
    }
}
