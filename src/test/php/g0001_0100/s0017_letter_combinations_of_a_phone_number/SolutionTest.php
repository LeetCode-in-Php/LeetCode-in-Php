<?php

namespace leetcode\g0001_0100\s0017_letter_combinations_of_a_phone_number;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testDecode() {
        $this->assertEquals("", (new Solution())->decode(""));
    }
}
