<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Milestones.DestinyMilestoneActivityVariantDefinition
 */
class Definitions.Milestones.DestinyMilestoneActivityVariantDefinition
{

    const NAME = 'Destiny.Definitions.Milestones.DestinyMilestoneActivityVariantDefinition';

    const TYPE = 'object';

    public $activityHash = [
        'type' => 'integer',
        'description' => 'The hash to use for looking up the variant Activity\'s definition (DestinyActivityDefinition), where you can find its distinguishing characteristics such as difficulty level and recommended light level. 
Frequently, that will be the only distinguishing characteristics in practice, which is somewhat of a bummer.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $order = [
        'type' => 'integer',
        'description' => 'If you care to do so, render the variants in the order prescribed by this value.
When you combine live Milestone data with the definition, the order becomes more useful because you\'ll be cross-referencing between the definition and live data.',
        'format' => 'int32',
    ];


}

