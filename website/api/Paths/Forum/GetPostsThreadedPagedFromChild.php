<?php

namespace Destiny2\Api\Paths\Forum;

/**
 * GetPostsThreadedPagedFromChild
 *
 * Returns a thread of posts starting at the topicId of the input childPostId,
 * optionally returning replies to those posts as well as the original parent.
 */
class GetPostsThreadedPagedFromChild
{

    const NAME = 'Forum.GetPostsThreadedPagedFromChild';

    const URI = '/Forum/GetPostsThreadedPagedFromChild/{childPostId}/{page}/{pageSize}/{replySize}/{rootThreadMode}/{sortMode}/';

    const METHOD = 'GET';

    const TAGS = [
        'Forum',
    ];

    const OPERATION_ID = 'Forum.GetPostsThreadedPagedFromChild';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Forum.PostSearchResponse',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

