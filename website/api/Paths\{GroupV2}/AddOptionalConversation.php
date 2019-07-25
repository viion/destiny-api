<?php

namespace Destiny2\Api\Paths\{GroupV2};

/**
 * Add a new optional conversation/chat channel. Requires admin permissions to
 * the group.
 */
class AddOptionalConversation
{
    const NAME           = 'GroupV2.AddOptionalConversation';
    const URI            = '/GroupV2/{groupId}/OptionalConversations/Add/';
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
