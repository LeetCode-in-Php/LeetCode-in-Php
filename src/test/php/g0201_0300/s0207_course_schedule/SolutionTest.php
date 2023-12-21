<?php

namespace leetcode\g0201_0300\s0207_course_schedule;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testCanFinish() {
        $this->assertEquals(true, (new Solution())->canFinish(2, array(array(1, 0))));
    }

    public function testCanFinish2() {
        $this->assertEquals(false, (new Solution())->canFinish(2, array(array(1, 0), array(0, 1))));
    }
}
