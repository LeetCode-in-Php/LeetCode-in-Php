<?php

namespace leetcode\g0001_0100\s0051_n_queens;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSolveNQueens() {
        $expected = array(array(".Q..", "...Q", "Q...", "..Q."), array("..Q.", "Q...", "...Q", ".Q.."));
        $solution = new Solution();
        $actual = $solution->solveNQueens(4);
        $this->assertEquals($expected, $actual);
    }

    public function testSolveNQueens2() {
        $expected = array(array("Q"));
        $solution = new Solution();
        $actual = $solution->solveNQueens(1);
        $this->assertEquals($expected, $actual);
    }
}
