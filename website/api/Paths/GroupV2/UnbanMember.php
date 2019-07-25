<?php

namespace Destiny2\Api\Paths\GroupV2;

/**
 * UnbanMember
 *
 * Unbans the requested member, allowing them to re-apply for membership.
 */
class UnbanMember
{

    const NAME = 'GroupV2.UnbanMember';

    const URI = '/GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Unban/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

