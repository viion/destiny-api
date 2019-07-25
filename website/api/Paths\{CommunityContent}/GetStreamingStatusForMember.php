<?php

namespace Destiny2\Api\Paths\{CommunityContent};

/**
 * Gets the Live Streaming status of a particular Account and Membership Type.
 */
class GetStreamingStatusForMember
{
    const NAME           = 'CommunityContent.GetStreamingStatusForMember';
    const URI            = '/CommunityContent/Live/Users/{partnershipType}/{membershipType}/{membershipId}/';
    const METHOD         = 'GET';
    const TAGS           = 'CommunityContent';
    const OPERATION_ID   = 'CommunityContent.GetStreamingStatusForMember';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Community.CommunityLiveStatus'
    ];

    public static function build()
    {

    }
}
