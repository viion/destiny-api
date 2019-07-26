<?php

namespace Destiny2\Api\Paths\GroupV2\KickMember;

/**
 * KickMember
 *
 * Kick a member from the given group, forcing them to reapply if they wish to
 * re-join the group. You must have suitable permissions in the group to perform
 * this operation.
 */
class KickMember
{

    const SUMMARY = 'GroupV2.KickMember';

    const URI = '/GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Kick/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

