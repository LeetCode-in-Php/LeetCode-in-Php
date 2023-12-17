<?php

namespace leetcode\g0101_0200\s0155_min_stack;

use PHPUnit\Framework\TestCase;

class MinStackTest extends TestCase {
    public function testMinStack() {
        $minStack = new MinStack();
        $minStack->push(-2);
        $minStack->push(0);
        $minStack->push(-3);
        // return -3
        $this->assertEquals(-3, $minStack->getMin());
        $minStack->pop();
        // return 0
        $this->assertEquals(0, $minStack->top());
        // return -2
        $this->assertEquals(-2, $minStack->getMin());
    }
}
