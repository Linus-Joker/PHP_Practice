<?php
/*
Input: [-4,-1,0,3,10]
Output: [0,1,9,16,100]
*/

class Solution
{

  /**
   * @param Integer[] $A
   * @return Integer[]
   */
  function sortedSquares($nums)
  {
    $count = count($nums);

    for ($i = 0; $i < $count; $i++) {
      $nums[$i] = $nums[$i] * $nums[$i];
    }
    sort($nums);
    print_r($nums);
  }
}


$rel = new Solution;

$rel->sortedSquares([-4, -1, 0, 3, 10]);
