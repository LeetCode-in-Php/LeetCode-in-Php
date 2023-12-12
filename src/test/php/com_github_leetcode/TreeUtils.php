<?php

namespace leetcode\com_github_leetcode;

use leetcode\com_github_leetcode\TreeNode;

class TreeUtils {
    /*
    * This method is to construct a normal binary tree. The input reads like
    * this for [5, 3, 6, 2, 4, null, null, 1], i.e. preorder:
                   5
                 /   \
                3     6
               / \    / \
              2   4  #   #
             /
            1
    */
    public static function constructBinaryTree($treeValues) {
        $root = new TreeNode();
        $root->val = $treeValues[0];
        $queue = [];
        array_push($queue, $root);
        for ($i = 1; $i < count($treeValues); $i++) {
            $curr = array_shift($queue);
            if ($treeValues[$i] != null) {
                $curr->left = new TreeNode();
                $curr->left->val = $treeValues[$i];
                array_push($queue, $curr->left);
            }
            if (++$i < count($treeValues) && $treeValues[$i] != null) {
                $curr->right = new TreeNode();
                $curr->right->val = $treeValues[$i];
                array_push($queue, $curr->right);
            }
        }
        return $root;
    }
}
