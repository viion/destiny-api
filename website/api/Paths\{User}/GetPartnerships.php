<?php

namespace Destiny2\Api\Paths\{User};

/**
 * Returns a user's linked Partnerships.
 */
class GetPartnerships
{
    const NAME           = 'User.GetPartnerships';
    const URI            = '/User/{membershipId}/Partnerships/';
    const METHOD         = 'GET';
    const TAGS           = 'User';
    const OPERATION_ID   = 'User.GetPartnerships';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/CEListOfPublicPartnershipDetail'
    ];

    public static function build()
    {

    }
}
