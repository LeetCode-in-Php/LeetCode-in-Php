<?php

namespace leetcode\g0201_0300\s0221_maximal_square;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMaximalSquare() {
        $input = array(
            array('1', '0', '1', '0', '0'),
            array('1', '0', '1', '1', '1'),
            array('1', '1', '1', '1', '1'),
            array('1', '0', '0', '1', '0')
        );
        $this->assertEquals(4, (new Solution())->maximalSquare($input));
    }

    public function testMaximalSquare2() {
        $input = array(array('0', '1'), array('1', '0'));
        $this->assertEquals(1, (new Solution())->maximalSquare($input));
    }

    public function testMaximalSquare3() {
        $input = array(array('0'));
        $this->assertEquals(0, (new Solution())->maximalSquare($input));
    }
}
