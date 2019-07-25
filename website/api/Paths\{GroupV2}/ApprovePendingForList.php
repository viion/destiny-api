<?php

namespace Destiny2\Api\Paths\{GroupV2};

/**
 * Approve all of the pending users for the given group.
 */
class ApprovePendingForList
{
    const NAME           = 'GroupV2.ApprovePendingForList';
    const URI            = '/GroupV2/{groupId}/Members/ApproveList/';
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
