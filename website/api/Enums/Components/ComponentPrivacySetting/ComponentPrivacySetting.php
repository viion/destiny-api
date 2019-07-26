<?php

namespace Destiny2\Api\Enums\Components\ComponentPrivacySetting;

/**
 * ComponentPrivacySetting
 *
 * A set of flags for reason(s) why the component populated in the way that it did.
 * Inspect the individual flags for the reasons.
 */
class ComponentPrivacySetting
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'None' => '0',
        'Public' => '1',
        'Private' => '2',
    ];


}

