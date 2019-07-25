<?php

namespace Destiny2\Api\Paths\{User};

/**
 * Returns a list of accounts associated with the supplied membership ID and
 * membership type. This will include all linked accounts (even when hidden)
 * if supplied credentials permit it.
 */
class GetMembershipDataById
{
    const NAME           = 'User.GetMembershipDataById';
    const URI            = '/User/GetMembershipsById/{membershipId}/{membershipType}/';
    const METHOD         = 'GET';
    const TAGS           = 'User';
    const OPERATION_ID   = 'User.GetMembershipDataById';

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
