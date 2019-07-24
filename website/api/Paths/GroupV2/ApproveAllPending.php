<?php

namespace Destiny2\Api\GroupV2;

/**
 * Approve all of the pending users for the given group.
 */
class ApproveAllPending
{
    const NAME           = 'GroupV2.ApproveAllPending';
    const URI            = '/GroupV2/{groupId}/Members/ApproveAll/';
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
