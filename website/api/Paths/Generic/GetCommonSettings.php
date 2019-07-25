<?php

namespace Destiny2\Api\Paths\Generic;

/**
 * GetCommonSettings
 *
 * Get the common settings used by the Bungie.Net environment.
 */
class GetCommonSettings
{

    const NAME = '.GetCommonSettings';

    const URI = '/Settings/';

    const METHOD = 'GET';

    const TAGS = [
        '',
    ];

    const OPERATION_ID = '.GetCommonSettings';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Common.Models.CoreSettingsConfiguration',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

