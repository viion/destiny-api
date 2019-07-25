<?php

namespace Destiny2\Api\Paths\GroupV2;

/**
 * DenyAllPending
 *
 * Deny all of the pending users for the given group.
 */
class DenyAllPending
{

    const NAME = 'GroupV2.DenyAllPending';

    const URI = '/GroupV2/{groupId}/Members/DenyAll/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

