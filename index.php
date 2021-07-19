<?php
declare(strict_types=1);

/**
 * @param int[] $source
 *
 * @return int
 */
function maxOnesAfterRemoveItem(array $source): int
{
    $single = 0;
    $double = 0;
    $result = 0;

    foreach ($source as $element) {
        if ($element === 1) {
            $single++;
            $double++;
            if ($double > $result) {
                $result = $double;
            }

            continue;
        }

        $double = $single;
        $single = 0;
    }

    if (count($source) === $result) {
        $result--;
    }

    return $result;
}

var_dump(maxOnesAfterRemoveItem([0,0]) == 0);
var_dump(maxOnesAfterRemoveItem([0,1]) == 1);
var_dump(maxOnesAfterRemoveItem([1,0]) == 1);
var_dump(maxOnesAfterRemoveItem([1,1]) == 1);
var_dump(maxOnesAfterRemoveItem([1, 1, 0, 1, 1]) == 4);
var_dump(maxOnesAfterRemoveItem([1, 1, 0, 1, 1, 0, 1, 1, 1]) == 5);
var_dump(maxOnesAfterRemoveItem([1, 1, 0, 1, 1, 0, 1, 1, 1, 0]) == 5);
