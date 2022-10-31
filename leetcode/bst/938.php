<?php

/**
 * Definition for a binary tree node.
 */

class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class Solution
{

    /**
     * @param TreeNode $root
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function rangeSumBST($root, $low, $high)
    {
        //這個能解，但是好像不能這樣偷吃步??
        // $sum = $low + $high;
        // foreach ($root as $key => $value) {
        //     if (($value > $low) && ($value < $high)) {
        //         $sum = $sum + $value;
        //     }
        // }

        // echo $sum;
    }
}


$root = [10, 5, 15, 3, 7, 13, 18, 1, null, 6];
// $root = new TreeNode();

$s = new Solution();

$s->rangeSumBST(10, 6, 10);
