<?php

namespace Destiny2\Api\Paths\{Forum};

/**
 * Gets a listing of all topics marked as part of the core group.
 */
class GetCoreTopicsPaged
{
    const NAME           = 'Forum.GetCoreTopicsPaged';
    const URI            = '/Forum/GetCoreTopicsPaged/{page}/{sort}/{quickDate}/{categoryFilter}/';
    const METHOD         = 'GET';
    const TAGS           = 'Forum';
    const OPERATION_ID   = 'Forum.GetCoreTopicsPaged';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Forum.PostSearchResponse'
    ];

    public static function build()
    {

    }
}
