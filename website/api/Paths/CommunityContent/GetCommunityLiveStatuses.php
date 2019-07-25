<?php

namespace Destiny2\Api\Paths\CommunityContent;

/**
 * GetCommunityLiveStatuses
 *
 * Returns info about community members who are live streaming.
 */
class GetCommunityLiveStatuses
{

    const NAME = 'CommunityContent.GetCommunityLiveStatuses';

    const URI = '/CommunityContent/Live/All/{partnershipType}/{sort}/{page}/';

    const METHOD = 'GET';

    const TAGS = [
        'CommunityContent',
    ];

    const OPERATION_ID = 'CommunityContent.GetCommunityLiveStatuses';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfCommunityLiveStatus',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

