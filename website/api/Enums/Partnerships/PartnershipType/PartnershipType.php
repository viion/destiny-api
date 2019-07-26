<?php

namespace Destiny2\Api\Enums\Partnerships\PartnershipType;

/**
 * PartnershipType
 *
 * Representing external partners to which BNet users can link accounts, but that
 * are not Account System credentials: partnerships that BNet uses exclusively for
 * data.
 */
class PartnershipType
{

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

