<?php

namespace Destiny2\Api\Paths\GroupV2\ApprovePending;

/**
 * ApprovePending
 *
 * Approve the given membershipId to join the group/clan as long as they have
 * applied.
 */
class ApprovePending
{

    const SUMMARY = 'GroupV2.ApprovePending';

    const URI = '/GroupV2/{groupId}/Members/Approve/{membershipType}/{membershipId}/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

