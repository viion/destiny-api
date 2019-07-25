<?php

namespace Destiny2\Api\Paths\{GroupV2};

/**
 * Edit the settings of an optional conversation/chat channel. Requires admin
 * permissions to the group.
 */
class EditOptionalConversation
{
    const NAME           = 'GroupV2.EditOptionalConversation';
    const URI            = '/GroupV2/{groupId}/OptionalConversations/Edit/{conversationId}/';
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
