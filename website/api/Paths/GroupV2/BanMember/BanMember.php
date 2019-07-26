<?php

namespace Destiny2\Api\Paths\GroupV2\BanMember;

/**
 * BanMember
 *
 * Bans the requested member from the requested group for the specified period of
 * time.
 */
class BanMember
{

    const SUMMARY = 'GroupV2.BanMember';

    const URI = '/GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Ban/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

