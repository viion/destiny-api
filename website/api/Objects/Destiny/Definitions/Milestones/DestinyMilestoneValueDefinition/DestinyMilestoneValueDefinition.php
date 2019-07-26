<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Milestones\DestinyMilestoneValueDefinition;

/**
 * DestinyMilestoneValueDefinition
 *
 * The definition for information related to a key/value pair that is relevant for
 * a particular Milestone or component within the Milestone. 
 * This lets us more flexibly pass up information that's useful to someone, even if
 * it's not necessarily us.
 */
class DestinyMilestoneValueDefinition
{

    const TYPE = 'object';

    public $key = [
        'type' => 'string',
    ];

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];


}

