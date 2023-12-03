<?php

namespace leetcode\g0001_0100\s0008_string_to_integer_atoi;

// #Medium #Top_Interview_Questions #String

class Solution {
    public function myAtoi($str) {
        if ($str === null || strlen($str) === 0) {
            return 0;
        }

        $i = 0;
        $negativeSign = false;
        $input = str_split($str);

        while ($i < count($input) && $input[$i] == ' ') {
            $i++;
        }

        if ($i == count($input)) {
            return 0;
        } elseif ($input[$i] == '+') {
            $i++;
        } elseif ($input[$i] == '-') {
            $i++;
            $negativeSign = true;
        }

        $num = 0;

        while ($i < count($input) && $input[$i] <= '9' && $input[$i] >= '0') {
            // current char
            $temp = $input[$i] - '0';
            $temp = $negativeSign ? -$temp : $temp;

            // avoid invalid number like 038
            if ($num == 0 && $temp == 0) {
                $i++;
            } elseif ($num == PHP_INT_MIN / 10 && $temp <= -8 || $num < PHP_INT_MIN / 10) {
                return PHP_INT_MIN;
            } elseif ($num == PHP_INT_MAX / 10 && $temp >= 7 || $num > PHP_INT_MAX / 10) {
                return PHP_INT_MAX;
            } else {
                $num = $num * 10 + $temp;
                $i++;
            }
        }

        return $num;
    }
}
