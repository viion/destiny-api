<?php

namespace Destiny2\Api\Paths\{Forum};

/**
 * Returns the post specified and its immediate parent of posts that are
 * awaiting approval.
 */
class GetPostAndParentAwaitingApproval
{
    const NAME           = 'Forum.GetPostAndParentAwaitingApproval';
    const URI            = '/Forum/GetPostAndParentAwaitingApproval/{childPostId}/';
    const METHOD         = 'GET';
    const TAGS           = 'Forum';
    const OPERATION_ID   = 'Forum.GetPostAndParentAwaitingApproval';

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
