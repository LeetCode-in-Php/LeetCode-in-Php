<?php

namespace leetcode\g0001_0100\s0055_jump_game;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testCanJump() {
        $expected = true;
        $input = array(2, 3, 1, 1, 4);
        $solution = new Solution();
        $actual = $solution->canJump($input);
        $this->assertEquals($expected, $actual);
    }

    public function testCanJump2() {
        $expected = false;
        $input = array(3, 2, 1, 0, 4);
        $solution = new Solution();
        $actual = $solution->canJump($input);
        $this->assertEquals($expected, $actual);
    }
}
