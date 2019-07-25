<?php

namespace Destiny2\Api\Enums\Partnerships;

/**
 * PartnershipType
 */
class PartnershipType
{

    const NAME = 'Partnerships.PartnershipType';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
    ];

    const ENUMS = [
        'None' => '0',
        'Twitch' => '1',
    ];


}

