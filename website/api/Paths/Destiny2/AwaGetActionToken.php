<?php

namespace Destiny2\Api\Paths\Destiny2;

/**
 * AwaGetActionToken
 *
 * Returns the action token if user approves the request.
 */
class AwaGetActionToken
{

    const NAME = 'Destiny2.AwaGetActionToken';

    const URI = '/Destiny2/Awa/GetActionToken/{correlationId}/';

    const METHOD = 'GET';

    const TAGS = [
        'Destiny2',
    ];

    const OPERATION_ID = 'Destiny2.AwaGetActionToken';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Destiny.Advanced.AwaAuthorizationResult',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

