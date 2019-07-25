<?php

namespace Destiny2\Api\Enums\Forum;

/**
 * ForumPostSortEnum
 */
class ForumPostSortEnum
{

    const NAME = 'Forum.ForumPostSortEnum';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
    ];

    const ENUMS = [
        'Default' => '0',
        'OldestFirst' => '1',
    ];


}

