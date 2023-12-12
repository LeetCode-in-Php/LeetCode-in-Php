<?php

namespace leetcode\com_github_leetcode;

class TreeNode {
    public $val;
    public $left;
    public $right;

    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }

    public static function create($treeValues) {
        $root = empty($treeValues) ? null : new TreeNode($treeValues[0]);
        $queue = array();
        array_push($queue, $root);
        $i = 1;
        while ($i < count($treeValues)) {
            $curr = array_shift($queue);
            if ($treeValues[$i] != null) {
                $curr->left = new TreeNode($treeValues[$i]);
                array_push($queue, $curr->left);
            }
            if (++$i < count($treeValues) && $treeValues[$i] != null) {
                $curr->right = new TreeNode($treeValues[$i]);
                array_push($queue, $curr->right);
            }
            $i++;
        }
        return $root;
    }

    public function __toString() {
        if ($this->left == null && $this->right == null) {
            return "" . $this->val;
        } else {
            $root = "" . $this->val;
            $leftValue = "null";
            $rightValue = "null";
            if ($this->left != null) {
                $leftValue = $this->left->__toString();
            }
            if ($this->right != null) {
                $rightValue = $this->right->__toString();
            }
            return $root . "," . $leftValue . "," . $rightValue;
        }
    }
}
