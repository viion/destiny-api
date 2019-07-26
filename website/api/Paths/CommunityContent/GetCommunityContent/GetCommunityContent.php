<?php

namespace Destiny2\Api\Paths\CommunityContent\GetCommunityContent;

/**
 * GetCommunityContent
 *
 * Returns community content.
 */
class GetCommunityContent
{

    const SUMMARY = 'CommunityContent.GetCommunityContent';

    const URI = '/CommunityContent/Get/{sort}/{mediaFilter}/{page}/';

    const METHOD = 'GET';

    const TAGS = [
        'CommunityContent',
    ];

    const OPERATION_ID = 'CommunityContent.GetCommunityContent';

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

