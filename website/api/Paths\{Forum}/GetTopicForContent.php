<?php

namespace Destiny2\Api\Paths\{Forum};

/**
 * Gets the post Id for the given content item's comments, if it exists.
 */
class GetTopicForContent
{
    const NAME           = 'Forum.GetTopicForContent';
    const URI            = '/Forum/GetTopicForContent/{contentId}/';
    const METHOD         = 'GET';
    const TAGS           = 'Forum';
    const OPERATION_ID   = 'Forum.GetTopicForContent';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/int64'
    ];

    public static function build()
    {

    }
}
