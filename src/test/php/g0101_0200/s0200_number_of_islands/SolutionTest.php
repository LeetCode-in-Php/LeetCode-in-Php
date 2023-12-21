<?php

namespace leetcode\g0101_0200\s0200_number_of_islands;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testNumIslands() {
        $this->assertEquals(1, (new Solution())->numIslands(array(
            array('1', '1', '1', '1', '0'),
            array('1', '1', '0', '1', '0'),
            array('1', '1', '0', '0', '0'),
            array('0', '0', '0', '0', '0')
        )));
    }

    public function testNumIslands2() {
        $this->assertEquals(3, (new Solution())->numIslands(array(
            array('1', '1', '0', '0', '0'),
            array('1', '1', '0', '0', '0'),
            array('0', '0', '1', '0', '0'),
            array('0', '0', '0', '1', '1')
        )));
    }
}
