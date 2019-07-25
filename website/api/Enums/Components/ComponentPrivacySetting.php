<?php

namespace Destiny2\Api\Enums\Components;

/**
 * ComponentPrivacySetting
 */
class ComponentPrivacySetting
{

    const NAME = 'Components.ComponentPrivacySetting';

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

