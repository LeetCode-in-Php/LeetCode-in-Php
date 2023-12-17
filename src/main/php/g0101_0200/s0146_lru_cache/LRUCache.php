<?php

namespace leetcode\g0101_0200\s0146_lru_cache;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Hash_Table #Design #Linked_List
// #Doubly_Linked_List #Udemy_Linked_List #Big_O_Time_O(1)_Space_O(capacity)
// #2023_12_16_Time_402_ms_(41.18%)_Space_141.8_MB_(23.53%)

class LruCacheNode {
    public $key;
    public $value;
    public $prev;
    public $next;

    function __construct($k, $v) {
        $this->key = $k;
        $this->value = $v;
    }
}

class LRUCache {
    private $capacity;
    private $cacheMap;
    private $head;
    private $tail;

    /**
     * @param Integer $capacity
     */
    function __construct($cap) {
        $this->capacity = $cap;
        $this->cacheMap = array();
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    public function get($key) {
        if (!isset($this->cacheMap[$key])) {
            return -1;
        }
        $val = $this->cacheMap[$key];
        $this->moveToHead($val);
        return $val->value;
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    public function put($key, $value) {
        if (isset($this->cacheMap[$key])) {
            $valNode = $this->cacheMap[$key];
            $valNode->value = $value;
            $this->moveToHead($valNode);
        } else {
            if (count($this->cacheMap) < $this->capacity) {
                if (count($this->cacheMap) == 0) {
                    $node = new LruCacheNode($key, $value);
                    $this->cacheMap[$key] = $node;
                    $this->head = $node;
                    $this->tail = $node;
                } else {
                    $node = new LruCacheNode($key, $value);
                    $this->cacheMap[$key] = $node;
                    $node->next = $this->head;
                    $this->head->prev = $node;
                    $this->head = $node;
                }
            } else {
                $last = $this->tail;
                $this->tail = $last->prev;
                if ($this->tail != null) {
                    $this->tail->next = null;
                }
                unset($this->cacheMap[$last->key]);
                if (count($this->cacheMap) == 0) {
                    $this->head = null;
                }
                $this->put($key, $value);
            }
        }
    }

    private function moveToHead($node) {
        if ($node === $this->head) {
            return;
        }
        if ($node === $this->tail) {
            $this->tail = $node->prev;
        }
        $prev = $node->prev;
        $next = $node->next;
        $prev->next = $next;
        if ($next != null) {
            $next->prev = $prev;
        }
        $node->prev = null;
        $node->next = $this->head;
        $this->head->prev = $node;
        $this->head = $node;
    }
}
/**
 * Your LRUCache object will be instantiated and called as such:
 * $obj = LRUCache($capacity);
 * $ret_1 = $obj->get($key);
 * $obj->put($key, $value);
 */
