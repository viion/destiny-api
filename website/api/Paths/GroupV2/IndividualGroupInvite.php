<?php

namespace Destiny2\Api\GroupV2;

/**
 * Invite a user to join this group.
 */
class IndividualGroupInvite
{
    const NAME           = 'GroupV2.IndividualGroupInvite';
    const URI            = '/GroupV2/{groupId}/Members/IndividualInvite/{membershipType}/{membershipId}/';
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
