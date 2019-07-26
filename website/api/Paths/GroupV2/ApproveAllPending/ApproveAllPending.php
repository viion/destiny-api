<?php

namespace Destiny2\Api\Paths\GroupV2\ApproveAllPending;

/**
 * ApproveAllPending
 *
 * Approve all of the pending users for the given group.
 */
class ApproveAllPending
{

    const SUMMARY = 'GroupV2.ApproveAllPending';

    const URI = '/GroupV2/{groupId}/Members/ApproveAll/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

