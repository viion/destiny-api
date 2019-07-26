<?php

namespace Destiny2\Api\Paths\GroupV2\GetAdminsAndFounderOfGroup;

/**
 * GetAdminsAndFounderOfGroup
 *
 * Get the list of members in a given group who are of admin level or higher.
 */
class GetAdminsAndFounderOfGroup
{

    const SUMMARY = 'GroupV2.GetAdminsAndFounderOfGroup';

    const URI = '/GroupV2/{groupId}/AdminsAndFounder/';

    const METHOD = 'GET';

    const TAGS = [
        'GroupV2',
    ];

    const OPERATION_ID = 'GroupV2.GetAdminsAndFounderOfGroup';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfGroupMember',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

