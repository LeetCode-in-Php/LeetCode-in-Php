<?php

namespace leetcode\g0001_0100\s0079_word_search;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testExist() {
        $input = [['A', 'B', 'C', 'E'], ['S', 'F', 'C', 'S'], ['A', 'D', 'E', 'E']];
        $solution = new Solution();
        $this->assertEquals(true, $solution->exist($input, "ABCCED"));
    }

    public function testExist2() {
        $input = [['A', 'B', 'C', 'E'], ['S', 'F', 'C', 'S'], ['A', 'D', 'E', 'E']];
        $solution = new Solution();
        $this->assertEquals(true, $solution->exist($input, "SEE"));
    }

    public function testExist3() {
        $input = [['A', 'B', 'C', 'E'], ['S', 'F', 'C', 'S'], ['A', 'D', 'E', 'E']];
        $solution = new Solution();
        $this->assertEquals(false, $solution->exist($input, "ABCB"));
    }
}
