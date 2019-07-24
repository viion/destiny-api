<?php

namespace Destiny2\Api\Forum;

/**
 * Returns the post specified and its immediate parent.
 */
class GetPostAndParent
{
    const NAME           = 'Forum.GetPostAndParent';
    const URI            = '/Forum/GetPostAndParent/{childPostId}/';
    const METHOD         = 'GET';
    const TAGS           = 'Forum';
    const OPERATION_ID   = 'Forum.GetPostAndParent';

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
