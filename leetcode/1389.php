<?php

/**
 * Example1:
 * Input: nums = [0,1,2,3,4], index = [0,1,2,2,1]
 * Output: [0,4,1,3,2]
 * Explanation:
 * nums       index     target
 * 0            0        [0]
 * 1            1        [0,1]
 * 2            2        [0,1,2]
 * 3            2        [0,1,3,2]
 * 4            1        [0,4,1,3,2]
 */

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer[] $index
     * @return Integer[]
     */
    function createTargetArray($nums, $index)
    {
        $target = [];
        $arraySize = count($index);

        for ($i = 0; $i < $arraySize; $i++) {
            /**
             * array1 $target 要移除的數組元素
             * start $index[$i] 說明是start，但是看起來比較像位置
             * length 要刪除的個數，若為0則不刪除元素改為從 start的位置插入
             * array2 $nums[$i] 原始資料的數組
             */

            //以第一輪為例就是將$target[0]的資料移除，改為將$nums[0]的資料放入
            array_splice($target, $index[$i], 0, $nums[$i]);
        }
        return $target;
    }
}

$s = new Solution();
print_r($s->createTargetArray([0, 1, 2, 3, 4], [0, 1, 2, 2, 1]));
// $s->createTargetArray([0, 1, 2, 3, 4], [0, 1, 2, 2, 1]);
