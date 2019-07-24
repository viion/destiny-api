<?php

namespace Destiny2\Api\GroupV2;

/**
 * Edit the membership type of a given member. You must have suitable
 * permissions in the group to perform this operation.
 */
class EditGroupMembership
{
    const NAME           = 'GroupV2.EditGroupMembership';
    const URI            = '/GroupV2/{groupId}/Members/{membershipType}/{membershipId}/SetMembershipType/{memberType}/';
    const METHOD         = 'POST';
    const TAGS           = '{tags}';
    const OPERATION_ID   = '{operationId}';

    const IS_PREVIEW     = {is_preview};
    const IS_DEPRECATED  = {is_deprecated};

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        
    ];

    public static function build()
    {

    }
}
