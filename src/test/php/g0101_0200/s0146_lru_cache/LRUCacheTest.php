<?php

namespace leetcode\g0101_0200\s0146_lru_cache;

use PHPUnit\Framework\TestCase;

class LRUCacheTest extends TestCase {
    public function testLRUCache() {
        $lruCache = new LRUCache(2);
        // cache is {1=1}
        $lruCache->put(1, 1);
        // cache is {1=1, 2=2}
        $lruCache->put(2, 2);
        // return 1
        $this->assertEquals($lruCache->get(1), 1);
        // LRU key was 2, evicts key 2, cache is {1=1, 3=3}
        $lruCache->put(3, 3);
        // returns -1 (not found)
        $this->assertEquals($lruCache->get(2), -1);
        // LRU key was 1, evicts key 1, cache is {4=4, 3=3}
        $lruCache->put(4, 4);
        // return -1 (not found)
        $this->assertEquals($lruCache->get(1), -1);
        // return 3
        $this->assertEquals($lruCache->get(3), 3);
        // return 4
        $this->assertEquals($lruCache->get(4), 4);
    }
}
