<?php

namespace Destiny2\Api\Paths\GroupV2\GetGroupByName;

/**
 * GetGroupByName
 *
 * Get information about a specific group with the given name and type.
 */
class GetGroupByName
{

    const SUMMARY = 'GroupV2.GetGroupByName';

    const URI = '/GroupV2/Name/{groupName}/{groupType}/';

    const METHOD = 'GET';

    const TAGS = [
        'GroupV2',
    ];

    const OPERATION_ID = 'GroupV2.GetGroupByName';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/GroupsV2.GroupResponse',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

