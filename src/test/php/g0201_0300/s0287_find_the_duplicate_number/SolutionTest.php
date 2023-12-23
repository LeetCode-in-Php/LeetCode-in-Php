<?php

namespace leetcode\g0201_0300\s0287_find_the_duplicate_number;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testFindDuplicate() {
        $this->assertEquals(2, (new Solution())->findDuplicate(array(1, 3, 4, 2, 2)));
    }

    public function testFindDuplicate2() {
        $this->assertEquals(3, (new Solution())->findDuplicate(array(3, 1, 3, 4, 2)));
    }

    public function testFindDuplicate3() {
        $this->assertEquals(1, (new Solution())->findDuplicate(array(1, 1)));
    }

    public function testFindDuplicate4() {
        $this->assertEquals(1, (new Solution())->findDuplicate(array(1, 1, 2)));
    }
}
