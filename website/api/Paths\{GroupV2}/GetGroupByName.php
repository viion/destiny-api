<?php

namespace Destiny2\Api\Paths\{GroupV2};

/**
 * Get information about a specific group with the given name and type.
 */
class GetGroupByName
{
    const NAME           = 'GroupV2.GetGroupByName';
    const URI            = '/GroupV2/Name/{groupName}/{groupType}/';
    const METHOD         = 'GET';
    const TAGS           = 'GroupV2';
    const OPERATION_ID   = 'GroupV2.GetGroupByName';

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
