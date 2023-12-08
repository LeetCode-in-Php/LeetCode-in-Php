<?php

namespace leetcode\g0001_0100\s0017_letter_combinations_of_a_phone_number;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testLetterCombinations() {
        $input = "23";
        $expected = ["ad", "ae", "af", "bd", "be", "bf", "cd", "ce", "cf"];
        $this->assertEquals($expected, (new Solution())->letterCombinations($input));
    }

    public function testLetterCombinations2() {
        $input = "";
        $expected = [];
        $this->assertEquals($expected, (new Solution())->letterCombinations($input));
    }

    public function testLetterCombinations3() {
        $input = "2";
        $expected = ["a", "b", "c"];
        $this->assertEquals($expected, (new Solution())->letterCombinations($input));
    }

    public function testLetterCombinations4() {
        $input = "4";
        $expected = ["g", "h", "i"];
        $this->assertEquals($expected, (new Solution())->letterCombinations($input));
    }

    public function testLetterCombinations5() {
        $input = "5";
        $expected = ["j", "k", "l"];
        $this->assertEquals($expected, (new Solution())->letterCombinations($input));
    }

    public function testLetterCombinations6() {
        $input = "6";
        $expected = ["m", "n", "o"];
        $this->assertEquals($expected, (new Solution())->letterCombinations($input));
    }

    public function testLetterCombinations7() {
        $input = "7";
        $expected = ["p", "q", "r", "s"];
        $this->assertEquals($expected, (new Solution())->letterCombinations($input));
    }

    public function testLetterCombinations8() {
        $input = "8";
        $expected = ["t", "u", "v"];
        $this->assertEquals($expected, (new Solution())->letterCombinations($input));
    }

    public function testLetterCombinations9() {
        $input = "9";
        $expected = ["w", "x", "y", "z"];
        $this->assertEquals($expected, (new Solution())->letterCombinations($input));
    }
}
