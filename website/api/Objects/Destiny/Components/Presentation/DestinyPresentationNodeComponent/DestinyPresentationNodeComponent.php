<?php

namespace Destiny2\Api\Objects\Destiny\Components\Presentation\DestinyPresentationNodeComponent;

/**
 * DestinyPresentationNodeComponent
 *
 * No description
 */
class DestinyPresentationNodeComponent
{

    const TYPE = 'object';

    public $state = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyPresentationNodeState',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $objective = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Quests.DestinyObjectiveProgress',
            ],
        ],
        'description' => 'An optional property: presentation nodes MAY have objectives, which can be used to infer more human readable data about the progress. However, progressValue and completionValue ought to be considered the canonical values for progress on Progression Nodes.',
    ];

    public $progressValue = [
        'type' => 'integer',
        'description' => 'How much of the presentation node is considered to be completed so far by the given character/profile.',
        'format' => 'int32',
    ];

    public $completionValue = [
        'type' => 'integer',
        'description' => 'The value at which the presentation ode is considered to be completed.',
        'format' => 'int32',
    ];


}

