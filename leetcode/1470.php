<?php

/*
Input: nums = [2,5,1,3,4,7], n = 3
Output: [2,3,5,4,1,7] 
Explanation: Since x1=2, x2=5, x3=1, y1=3, y2=4, y3=7 then the answer is [2,3,5,4,1,7].
*/


class Solution
{

  /**
   * @param Integer[] $nums
   * @param Integer $n
   * @return Integer[]
   */
  function shuffle($nums, $n)
  {
    $res = [];

    for ($i = 0; $i < $n; $i++) {
      $res[] = $nums[$i];
      $res[] = $nums[$n + $i];
    }
    return $res;
  }
}

$rel = new Solution;

print_r($rel->shuffle([2, 5, 1, 3, 4, 7], 3));
