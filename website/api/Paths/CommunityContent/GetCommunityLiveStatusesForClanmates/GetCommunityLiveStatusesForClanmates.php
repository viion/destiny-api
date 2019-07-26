<?php

namespace Destiny2\Api\Paths\CommunityContent\GetCommunityLiveStatusesForClanmates;

/**
 * GetCommunityLiveStatusesForClanmates
 *
 * Returns info about community members who are live streaming in your clans.
 */
class GetCommunityLiveStatusesForClanmates
{

    const SUMMARY = 'CommunityContent.GetCommunityLiveStatusesForClanmates';

    const URI = '/CommunityContent/Live/Clan/{partnershipType}/{sort}/{page}/';

    const METHOD = 'GET';

    const TAGS = [
        'CommunityContent',
    ];

    const OPERATION_ID = 'CommunityContent.GetCommunityLiveStatusesForClanmates';

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

