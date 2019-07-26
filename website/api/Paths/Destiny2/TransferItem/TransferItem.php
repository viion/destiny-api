<?php

namespace Destiny2\Api\Paths\Destiny2\TransferItem;

/**
 * TransferItem
 *
 * Transfer an item to/from your vault. You must have a valid Destiny account. You
 * must also pass BOTH a reference AND an instance ID if it's an instanced item.
 * itshappening.gif
 */
class TransferItem
{

    const SUMMARY = 'Destiny2.TransferItem';

    const URI = '/Destiny2/Actions/Items/TransferItem/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

