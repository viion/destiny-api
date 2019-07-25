<?php

namespace Destiny2\Api\Objects\Forum;

/**
 * ForumRecruitmentDetail
 */
class ForumRecruitmentDetail
{

    const NAME = 'Forum.ForumRecruitmentDetail';

    const TYPE = 'object';

    public $topicId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $microphoneRequired = [
        'type' => 'boolean',
    ];

    public $intensity = [
        'type' => 'integer',
        'format' => 'byte',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Forum.ForumRecruitmentIntensityLabel',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $tone = [
        'type' => 'integer',
        'format' => 'byte',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Forum.ForumRecruitmentToneLabel',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $approved = [
        'type' => 'boolean',
    ];

    public $conversationId = [
        'type' => 'integer',
        'format' => 'int64',
        'nullable' => true,
    ];

    public $playerSlotsTotal = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $playerSlotsRemaining = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $Fireteam = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/User.GeneralUser',
        ],
    ];

    public $kickedPlayerIds = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int64',
        ],
    ];


}

