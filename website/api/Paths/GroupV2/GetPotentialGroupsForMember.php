<?php

namespace Destiny2\Api\GroupV2;

/**
 * Get information about the groups that a given member has applied to or been
 * invited to.
 */
class GetPotentialGroupsForMember
{
    const NAME           = 'GroupV2.GetPotentialGroupsForMember';
    const URI            = '/GroupV2/User/Potential/{membershipType}/{membershipId}/{filter}/{groupType}/';
    const METHOD         = 'GET';
    const TAGS           = 'GroupV2';
    const OPERATION_ID   = 'GroupV2.GetPotentialGroupsForMember';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/GroupsV2.GroupPotentialMembershipSearchResponse'
    ];

    public static function build()
    {

    }
}
