<?php

namespace Destiny2\Api\Forum;

/**
 * Returns a thread of posts at the given parent, optionally returning replies
 * to those posts as well as the original parent.
 */
class GetPostsThreadedPaged
{
    const NAME           = 'Forum.GetPostsThreadedPaged';
    const URI            = '/Forum/GetPostsThreadedPaged/{parentPostId}/{page}/{pageSize}/{replySize}/{getParentPost}/{rootThreadMode}/{sortMode}/';
    const METHOD         = 'GET';
    const TAGS           = 'Forum';
    const OPERATION_ID   = 'Forum.GetPostsThreadedPaged';

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
