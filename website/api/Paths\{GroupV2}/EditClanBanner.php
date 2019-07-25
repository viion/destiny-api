<?php

namespace Destiny2\Api\Paths\{GroupV2};

/**
 * Edit an existing group's clan banner. You must have suitable permissions in
 * the group to perform this operation. All fields are required.
 */
class EditClanBanner
{
    const NAME           = 'GroupV2.EditClanBanner';
    const URI            = '/GroupV2/{groupId}/EditClanBanner/';
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
