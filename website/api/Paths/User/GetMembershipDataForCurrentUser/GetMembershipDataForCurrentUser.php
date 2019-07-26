<?php

namespace Destiny2\Api\Paths\User\GetMembershipDataForCurrentUser;

/**
 * GetMembershipDataForCurrentUser
 *
 * Returns a list of accounts associated with signed in user. This is useful for
 * OAuth implementations that do not give you access to the token response.
 */
class GetMembershipDataForCurrentUser
{

    const SUMMARY = 'User.GetMembershipDataForCurrentUser';

    const URI = '/User/GetMembershipsForCurrentUser/';

    const METHOD = 'GET';

    const TAGS = [
        'User',
    ];

    const OPERATION_ID = 'User.GetMembershipDataForCurrentUser';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/User.UserMembershipData',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

