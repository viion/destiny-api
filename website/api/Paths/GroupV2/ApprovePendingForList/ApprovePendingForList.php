<?php

namespace Destiny2\Api\Paths\GroupV2\ApprovePendingForList;

/**
 * ApprovePendingForList
 *
 * Approve all of the pending users for the given group.
 */
class ApprovePendingForList
{

    const SUMMARY = 'GroupV2.ApprovePendingForList';

    const URI = '/GroupV2/{groupId}/Members/ApproveList/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

