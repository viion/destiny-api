<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * DestinyTalentNodeStatBlock
 */
class DestinyTalentNodeStatBlock
{

    const NAME = 'Destiny.DestinyTalentNodeStatBlock';

    const TYPE = 'object';

    public $currentStepStats = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DestinyStat',
        ],
        'description' => 'The stat benefits conferred when this talent node is activated for the current Step that is active on the node.',
    ];

    public $nextStepStats = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DestinyStat',
        ],
        'description' => 'This is a holdover from the old days of Destiny 1, when a node could be activated multiple times, conferring multiple steps worth of benefits: you would use this property to show what activating the "next" step on the node would provide vs. what the current step is providing. While Nodes are currently not being used this way, the underlying system for this functionality still exists. I hesitate to remove this property while the ability for designers to make such a talent grid still exists. Whether you want to show it is up to you.',
    ];


}
