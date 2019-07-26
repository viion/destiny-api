<?php

namespace Destiny2\Api\Enums\Forums\ForumPostCategoryEnums;

/**
 * ForumPostCategoryEnums
 *
 * No description
 */
class ForumPostCategoryEnums
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '4',
        '8',
        '16',
        '32',
        '64',
        '128',
        '256',
        '512',
        '1024',
    ];

    const ENUMS = [
        'None' => '0',
        'TextOnly' => '1',
        'Media' => '2',
        'Link' => '4',
        'Poll' => '8',
        'Question' => '16',
        'Answered' => '32',
        'Announcement' => '64',
        'ContentComment' => '128',
        'BungieOfficial' => '256',
        'NinjaOfficial' => '512',
        'Recruitment' => '1024',
    ];


}

