<?php

namespace Destiny2\Api\Paths\GroupV2\EditGroupMembership;

/**
 * EditGroupMembership
 *
 * Edit the membership type of a given member. You must have suitable permissions
 * in the group to perform this operation.
 */
class EditGroupMembership
{

    const SUMMARY = 'GroupV2.EditGroupMembership';

    const URI = '/GroupV2/{groupId}/Members/{membershipType}/{membershipId}/SetMembershipType/{memberType}/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

