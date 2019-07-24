<?php

namespace Destiny2\Api\CommunityContent;

/**
 * Returns info about Featured live streams.
 */
class GetFeaturedCommunityLiveStatuses
{
    const NAME           = 'CommunityContent.GetFeaturedCommunityLiveStatuses';
    const URI            = '/CommunityContent/Live/Featured/{partnershipType}/{sort}/{page}/';
    const METHOD         = 'GET';
    const TAGS           = 'CommunityContent';
    const OPERATION_ID   = 'CommunityContent.GetFeaturedCommunityLiveStatuses';

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
