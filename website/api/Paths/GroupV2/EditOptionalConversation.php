<?php

namespace Destiny2\Api\Paths\GroupV2;

/**
 * EditOptionalConversation
 *
 * Edit the settings of an optional conversation/chat channel. Requires admin
 * permissions to the group.
 */
class EditOptionalConversation
{

    const NAME = 'GroupV2.EditOptionalConversation';

    const URI = '/GroupV2/{groupId}/OptionalConversations/Edit/{conversationId}/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

