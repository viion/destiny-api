<?php

namespace Destiny2\Api\Enums\Forums\ForumFlagsEnum;

/**
 * ForumFlagsEnum
 *
 * No description
 */
class ForumFlagsEnum
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
        'BungieStaffPost' => '1',
        'ForumNinjaPost' => '2',
        'ForumMentorPost' => '4',
        'TopicBungieStaffPosted' => '8',
        'TopicBungieVolunteerPosted' => '16',
        'QuestionAnsweredByBungie' => '32',
        'QuestionAnsweredByNinja' => '64',
        'CommunityContent' => '128',
    ];


}

