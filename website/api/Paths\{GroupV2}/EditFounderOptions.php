<?php

namespace Destiny2\Api\Paths\{GroupV2};

/**
 * Edit group options only available to a founder. You must have suitable
 * permissions in the group to perform this operation.
 */
class EditFounderOptions
{
    const NAME           = 'GroupV2.EditFounderOptions';
    const URI            = '/GroupV2/{groupId}/EditFounderOptions/';
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
