<?php

namespace leetcode\g0401_0500\s0437_path_sum_iii;

use leetcode\com_github_leetcode\TreeNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testPathSum() {
        $this->assertEquals(3, (new Solution())->pathSum(TreeNode::create(array(10, 5, -3, 3, 2, null, 11, 3, -2, null, 1)), 8));
    }

    public function testPathSum2() {
        $this->assertEquals(3, (new Solution())->pathSum(TreeNode::create(array(5, 4, 8, 11, null, 13, 4, 7, 2, null, null, 5, 1)), 22));
    }
}
