<?php

namespace Destiny2\Api\Enums\Fireteam\FireteamPublicSearchOption;

/**
 * FireteamPublicSearchOption
 *
 * No description
 */
class FireteamPublicSearchOption
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'byte';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'PublicAndPrivate' => '0',
        'PublicOnly' => '1',
        'PrivateOnly' => '2',
    ];


}

