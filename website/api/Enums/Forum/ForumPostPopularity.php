<?php

namespace Destiny2\Api\Enums\Forum;

/**
 * ForumPostPopularity
 */
class ForumPostPopularity
{

    const NAME = 'Forum.ForumPostPopularity';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
    ];

    const ENUMS = [
        'Empty' => '0',
        'Default' => '1',
        'Discussed' => '2',
        'CoolStory' => '3',
        'HeatingUp' => '4',
        'Hot' => '5',
    ];


}

