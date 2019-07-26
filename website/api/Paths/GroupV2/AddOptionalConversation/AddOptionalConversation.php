<?php

namespace Destiny2\Api\Paths\GroupV2\AddOptionalConversation;

/**
 * AddOptionalConversation
 *
 * Add a new optional conversation/chat channel. Requires admin permissions to the
 * group.
 */
class AddOptionalConversation
{

    const SUMMARY = 'GroupV2.AddOptionalConversation';

    const URI = '/GroupV2/{groupId}/OptionalConversations/Add/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

