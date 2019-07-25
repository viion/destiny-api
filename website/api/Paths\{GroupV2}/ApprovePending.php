<?php

namespace Destiny2\Api\Paths\{GroupV2};

/**
 * Approve the given membershipId to join the group/clan as long as they have
 * applied.
 */
class ApprovePending
{
    const NAME           = 'GroupV2.ApprovePending';
    const URI            = '/GroupV2/{groupId}/Members/Approve/{membershipType}/{membershipId}/';
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
