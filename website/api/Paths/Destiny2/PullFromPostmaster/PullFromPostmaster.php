<?php

namespace Destiny2\Api\Paths\Destiny2\PullFromPostmaster;

/**
 * PullFromPostmaster
 *
 * Extract an item from the Postmaster, with whatever implications that may entail.
 * You must have a valid Destiny account. You must also pass BOTH a reference AND
 * an instance ID if it's an instanced item.
 */
class PullFromPostmaster
{

    const SUMMARY = 'Destiny2.PullFromPostmaster';

    const URI = '/Destiny2/Actions/Items/PullFromPostmaster/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

