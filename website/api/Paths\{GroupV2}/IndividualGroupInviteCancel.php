<?php

namespace Destiny2\Api\Paths\{GroupV2};

/**
 * Cancels a pending invitation to join a group.
 */
class IndividualGroupInviteCancel
{
    const NAME           = 'GroupV2.IndividualGroupInviteCancel';
    const URI            = '/GroupV2/{groupId}/Members/IndividualInviteCancel/{membershipType}/{membershipId}/';
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
