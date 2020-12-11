<?php

class Solution
{

    /**
     * @param String $str
     * @return String
     */
    function toLowerCase($str)
    {

        return strtolower($str);
    }
}

$a = new Solution;

echo $a->toLowerCase('LOVELY');
