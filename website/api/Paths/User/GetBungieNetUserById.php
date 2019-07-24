<?php

namespace Destiny2\Api\User;

/**
 * Loads a bungienet user by membership id.
 */
class GetBungieNetUserById
{
    const NAME           = 'User.GetBungieNetUserById';
    const URI            = '/User/GetBungieNetUserById/{id}/';
    const METHOD         = 'GET';
    const TAGS           = 'User';
    const OPERATION_ID   = 'User.GetBungieNetUserById';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/User.GeneralUser'
    ];

    public static function build()
    {

    }
}
