<?php
/* 
Input: [3,1,2,4]
Output: [2,4,3,1]
The outputs [4,2,3,1], [2,4,1,3], and [4,2,1,3] would also be accepted.
*/

class Solution
{

  /**
   * @param Integer[] $A
   * @return Integer[]
   */
  function sortArrayByParity($A)
  {
    $a = [];
    $b = [];
    foreach ($A as $value) {
      if ($value % 2 === 0) {
        $a[] = $value;
      } else {
        $b[] = $value;
      }
    }

    return $a;
  }
}


$rel = new Solution;

print_r($rel->sortArrayByParity([3, 1, 2, 4]));
