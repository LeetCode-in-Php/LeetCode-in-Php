<?php

namespace leetcode\g0001_0100\s0045_jump_game_ii;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testJump() {
        $this->assertEquals(2, (new Solution())->jump(array(2, 3, 1, 1, 4)));
    }

    public function testJump2() {
        $this->assertEquals(2, (new Solution())->jump(array(2, 3, 0, 1, 4)));
    }
}
