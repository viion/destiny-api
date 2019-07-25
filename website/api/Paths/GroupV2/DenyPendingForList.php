<?php

namespace Destiny2\Api\Paths\GroupV2;

/**
 * DenyPendingForList
 *
 * Deny all of the pending users for the given group that match the passed-in .
 */
class DenyPendingForList
{

    const NAME = 'GroupV2.DenyPendingForList';

    const URI = '/GroupV2/{groupId}/Members/DenyList/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

