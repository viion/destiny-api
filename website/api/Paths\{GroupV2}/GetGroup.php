<?php

namespace Destiny2\Api\Paths\{GroupV2};

/**
 * Get information about a specific group of the given ID.
 */
class GetGroup
{
    const NAME           = 'GroupV2.GetGroup';
    const URI            = '/GroupV2/{groupId}/';
    const METHOD         = 'GET';
    const TAGS           = 'GroupV2';
    const OPERATION_ID   = 'GroupV2.GetGroup';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/GroupsV2.GroupResponse'
    ];

    public static function build()
    {

    }
}
