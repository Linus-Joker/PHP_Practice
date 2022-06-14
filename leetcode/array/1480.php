<?php
// Input: nums = [1,2,3,4]
// Output: [1,3,6,10]
// Explanation: Running sum is obtained as follows: [1, 1+2, 1+2+3, 1+2+3+4].

class Solution
{

  /**
   * @param Integer[] $nums
   * @return Integer[]
   */
  function runningSum($nums)
  {
    $count = count($nums);
    for ($i = 1; $i < $count; $i++) {
      $nums[$i] = $nums[$i] + $nums[$i - 1];
    }

    print_r($nums);
  }
}

$rel = new Solution;

$rel->runningSum([1, 2, 3, 4]);
