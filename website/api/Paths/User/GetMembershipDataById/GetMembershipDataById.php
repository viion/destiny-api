<?php

namespace Destiny2\Api\Paths\User\GetMembershipDataById;

/**
 * GetMembershipDataById
 *
 * Returns a list of accounts associated with the supplied membership ID and
 * membership type. This will include all linked accounts (even when hidden) if
 * supplied credentials permit it.
 */
class GetMembershipDataById
{

    const SUMMARY = 'User.GetMembershipDataById';

    const URI = '/User/GetMembershipsById/{membershipId}/{membershipType}/';

    const METHOD = 'GET';

    const TAGS = [
        'User',
    ];

    const OPERATION_ID = 'User.GetMembershipDataById';

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

