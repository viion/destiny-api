<?php

namespace Destiny2\Api\Paths\{User};

/**
 * Returns a list of accounts associated with signed in user. This is useful
 * for OAuth implementations that do not give you access to the token
 * response.
 */
class GetMembershipDataForCurrentUser
{
    const NAME           = 'User.GetMembershipDataForCurrentUser';
    const URI            = '/User/GetMembershipsForCurrentUser/';
    const METHOD         = 'GET';
    const TAGS           = 'User';
    const OPERATION_ID   = 'User.GetMembershipDataForCurrentUser';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/User.UserMembershipData'
    ];

    public static function build()
    {

    }
}
