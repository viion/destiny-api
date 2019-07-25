<?php

namespace Destiny2\Api\Paths\{CommunityContent};

/**
 * Returns info about community members who are live streaming in your clans.
 */
class GetCommunityLiveStatusesForClanmates
{
    const NAME           = 'CommunityContent.GetCommunityLiveStatusesForClanmates';
    const URI            = '/CommunityContent/Live/Clan/{partnershipType}/{sort}/{page}/';
    const METHOD         = 'GET';
    const TAGS           = 'CommunityContent';
    const OPERATION_ID   = 'CommunityContent.GetCommunityLiveStatusesForClanmates';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfCommunityLiveStatus'
    ];

    public static function build()
    {

    }
}
