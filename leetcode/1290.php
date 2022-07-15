<?php

/**
 * Definition for a singly-linked list.
 */

class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    /**
     * @param ListNode $head
     * @return Integer
     */
    function getDecimalValue($head)
    {
        return $head->next;
    }
}

$num = [1, 0, 1];
$head = new ListNode($num[0], $num[0 + 1]);

// echo $head->val;
// echo $head->next;

$c = new Solution();
echo $c->getDecimalValue($head);
