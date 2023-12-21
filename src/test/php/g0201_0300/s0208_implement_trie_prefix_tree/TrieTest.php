<?php

namespace leetcode\g0201_0300\s0208_implement_trie_prefix_tree;

use PHPUnit\Framework\TestCase;

class TrieTest extends TestCase {
    public function testTrie() {
        $trie = new Trie();
        $trie->insert("apple");
        $this->assertEquals(true, $trie->search("apple"));
        $this->assertEquals(false, $trie->search("app"));
        $this->assertEquals(true, $trie->startsWith("app"));
        $trie->insert("app");
        $this->assertEquals(true, $trie->search("app"));
    }
}
