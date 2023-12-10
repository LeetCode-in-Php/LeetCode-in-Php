<?php

namespace leetcode\g0001_0100\s0049_group_anagrams;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testGroupAnagrams() {
        $expected = array(array("eat", "tea", "ate"), array("tan", "nat"), array("bat"));
        $input = array("eat", "tea", "tan", "ate", "nat", "bat");
        $solution = new Solution();
        $actual = $solution->groupAnagrams($input);
        $this->assertEquals($expected, $actual);
    }

    public function testGroupAnagrams2() {
        $expected = array(array(""));
        $input = array("");
        $solution = new Solution();
        $actual = $solution->groupAnagrams($input);
        $this->assertEquals($expected, $actual);
    }

    public function testGroupAnagrams3() {
        $expected = array(array("a"));
        $input = array("a");
        $solution = new Solution();
        $actual = $solution->groupAnagrams($input);
        $this->assertEquals($expected, $actual);
    }
}
