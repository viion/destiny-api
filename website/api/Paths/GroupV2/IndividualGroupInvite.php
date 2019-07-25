<?php

namespace Destiny2\Api\Paths\GroupV2;

/**
 * IndividualGroupInvite
 *
 * Invite a user to join this group.
 */
class IndividualGroupInvite
{

    const NAME = 'GroupV2.IndividualGroupInvite';

    const URI = '/GroupV2/{groupId}/Members/IndividualInvite/{membershipType}/{membershipId}/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

