<?php

namespace Destiny2\Api\Paths\User;

/**
 * GetBungieNetUserById
 *
 * Loads a bungienet user by membership id.
 */
class GetBungieNetUserById
{

    const NAME = 'User.GetBungieNetUserById';

    const URI = '/User/GetBungieNetUserById/{id}/';

    const METHOD = 'GET';

    const TAGS = [
        'User',
    ];

    const OPERATION_ID = 'User.GetBungieNetUserById';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/User.GeneralUser',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

