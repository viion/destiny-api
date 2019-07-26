<?php

namespace Destiny2\Api\Enums\Forum\ForumTopicsCategoryFiltersEnum;

/**
 * ForumTopicsCategoryFiltersEnum
 *
 * No description
 */
class ForumTopicsCategoryFiltersEnum
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
    ];

    const ENUMS = [
        'None' => '0',
        'Links' => '1',
        'Questions' => '2',
        'AnsweredQuestions' => '4',
        'Media' => '8',
        'TextOnly' => '16',
        'Announcement' => '32',
        'BungieOfficial' => '64',
        'Polls' => '128',
    ];


}

