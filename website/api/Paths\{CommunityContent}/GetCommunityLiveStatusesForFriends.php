<?php

namespace Destiny2\Api\Paths\{CommunityContent};

/**
 * Returns info about community members who are live streaming among your
 * friends.
 */
class GetCommunityLiveStatusesForFriends
{
    const NAME           = 'CommunityContent.GetCommunityLiveStatusesForFriends';
    const URI            = '/CommunityContent/Live/Friends/{partnershipType}/{sort}/{page}/';
    const METHOD         = 'GET';
    const TAGS           = 'CommunityContent';
    const OPERATION_ID   = 'CommunityContent.GetCommunityLiveStatusesForFriends';

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
