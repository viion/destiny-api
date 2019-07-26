<?php

namespace Destiny2\Api\Paths\GroupV2\GetGroup;

/**
 * GetGroup
 *
 * Get information about a specific group of the given ID.
 */
class GetGroup
{

    const SUMMARY = 'GroupV2.GetGroup';

    const URI = '/GroupV2/{groupId}/';

    const METHOD = 'GET';

    const TAGS = [
        'GroupV2',
    ];

    const OPERATION_ID = 'GroupV2.GetGroup';

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

