<?php

namespace Destiny2\Api\Paths\GroupV2\GetPotentialGroupsForMember;

/**
 * GetPotentialGroupsForMember
 *
 * Get information about the groups that a given member has applied to or been
 * invited to.
 */
class GetPotentialGroupsForMember
{

    const SUMMARY = 'GroupV2.GetPotentialGroupsForMember';

    const URI = '/GroupV2/User/Potential/{membershipType}/{membershipId}/{filter}/{groupType}/';

    const METHOD = 'GET';

    const TAGS = [
        'GroupV2',
    ];

    const OPERATION_ID = 'GroupV2.GetPotentialGroupsForMember';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/GroupsV2.GroupPotentialMembershipSearchResponse',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

