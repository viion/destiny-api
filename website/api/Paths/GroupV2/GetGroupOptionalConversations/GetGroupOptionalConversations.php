<?php

namespace Destiny2\Api\Paths\GroupV2\GetGroupOptionalConversations;

/**
 * GetGroupOptionalConversations
 *
 * Gets a list of available optional conversation channels and their settings.
 */
class GetGroupOptionalConversations
{

    const SUMMARY = 'GroupV2.GetGroupOptionalConversations';

    const URI = '/GroupV2/{groupId}/OptionalConversations/';

    const METHOD = 'GET';

    const TAGS = [
        'GroupV2',
    ];

    const OPERATION_ID = 'GroupV2.GetGroupOptionalConversations';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/CEListOfGroupOptionalConversation',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

