<?php

namespace Destiny2\Api\Paths\User\GetPartnerships;

/**
 * GetPartnerships
 *
 * Returns a user's linked Partnerships.
 */
class GetPartnerships
{

    const SUMMARY = 'User.GetPartnerships';

    const URI = '/User/{membershipId}/Partnerships/';

    const METHOD = 'GET';

    const TAGS = [
        'User',
    ];

    const OPERATION_ID = 'User.GetPartnerships';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/CEListOfPublicPartnershipDetail',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

