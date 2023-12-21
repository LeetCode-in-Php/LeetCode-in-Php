<?php

namespace leetcode\g0201_0300\s0208_implement_trie_prefix_tree;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #String #Hash_Table #Design #Trie
// #Level_2_Day_16_Design #Udemy_Trie_and_Heap
// #Big_O_Time_O(word.length())_or_O(prefix.length())_Space_O(N)
// #2023_12_21_Time_83_ms_(46.67%)_Space_52.1_MB_(6.67%)

class TrieNode {
    public $children;
    public $isWord;

    function __construct() {
        $this->children = array_fill(0, 26, null);
        $this->isWord = false;
    }
}

class Trie {
    private $root;
    private $startWith;

    function __construct() {
        $this->root = new TrieNode();
        $this->startWith = false;
    }

    /**
     * @param String $word
     * @return NULL
     */
    public function insert($word) {
        $this->insertInternal($word, $this->root, 0);
    }

    private function insertInternal($word, $root, $idx) {
        if ($idx == strlen($word)) {
            $root->isWord = true;
            return;
        }
        $index = ord($word[$idx]) - ord('a');
        if ($root->children[$index] == null) {
            $root->children[$index] = new TrieNode();
        }
        $this->insertInternal($word, $root->children[$index], $idx + 1);
    }

    /**
     * @param String $word
     * @return Boolean
     */
    public function search($word) {
        return $this->searchInternal($word, $this->root, 0);
    }

    private function searchInternal($word, $root, $idx) {
        if ($idx == strlen($word)) {
            $this->startWith = true;
            return $root->isWord;
        }
        $index = ord($word[$idx]) - ord('a');
        if ($root->children[$index] == null) {
            $this->startWith = false;
            return false;
        }
        return $this->searchInternal($word, $root->children[$index], $idx + 1);
    }

    /**
     * @param String $prefix
     * @return Boolean
     */
    public function startsWith($prefix) {
        $this->search($prefix);
        return $this->startWith;
    }
}
/**
 * Your Trie object will be instantiated and called as such:
 * $obj = Trie();
 * $obj->insert($word);
 * $ret_2 = $obj->search($word);
 * $ret_3 = $obj->startsWith($prefix);
 */
