<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Milestones.DestinyMilestoneValueDefinition
 */
class Definitions.Milestones.DestinyMilestoneValueDefinition
{

    const NAME = 'Destiny.Definitions.Milestones.DestinyMilestoneValueDefinition';

    const TYPE = 'object';

    public $key = [
        'type' => 'string',
    ];

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];


}

