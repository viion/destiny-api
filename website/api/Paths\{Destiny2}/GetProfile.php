<?php

namespace Destiny2\Api\Paths\{Destiny2};

/**
 * Returns Destiny Profile information for the supplied membership.
 */
class GetProfile
{
    const NAME           = 'Destiny2.GetProfile';
    const URI            = '/Destiny2/{membershipType}/Profile/{destinyMembershipId}/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2';
    const OPERATION_ID   = 'Destiny2.GetProfile';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Responses.DestinyProfileResponse'
    ];

    public static function build()
    {

    }
}
