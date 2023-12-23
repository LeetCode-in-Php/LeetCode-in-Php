<?php

namespace leetcode\g0201_0300\s0295_find_median_from_data_stream;

use PHPUnit\Framework\TestCase;

class MedianFinderTest extends TestCase {
    public function testMedianFinder() {
        $medianFinder = new MedianFinder();
        // arr = [1]
        $medianFinder->addNum(1);
        // arr = [1, 2]
        $medianFinder->addNum(2);
        // return 1.5 (i.e., (1 + 2) / 2)
        $this->assertEquals(1.5, $medianFinder->findMedian());
        // arr[1, 2, 3]
        $medianFinder->addNum(3);
        // return 2.0
        $this->assertEquals(2.0, $medianFinder->findMedian());
    }

    public function testMedianFinder2() {
        $medianFinder = new MedianFinder();
        $medianFinder->addNum(1);
        $medianFinder->addNum(3);
        $medianFinder->addNum(-1);
        $this->assertEquals(1.0, $medianFinder->findMedian());
    }
}
