<?php

namespace Destiny2\Api\Enums\Forum;

/**
 * ForumRecruitmentIntensityLabel
 */
class ForumRecruitmentIntensityLabel
{

    const NAME = 'Forum.ForumRecruitmentIntensityLabel';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'byte';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'None' => '0',
        'Casual' => '1',
        'Professional' => '2',
    ];


}

