<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Milestones.DestinyMilestoneActivityDefinition
 */
class Definitions.Milestones.DestinyMilestoneActivityDefinition
{

    const NAME = 'Destiny.Definitions.Milestones.DestinyMilestoneActivityDefinition';

    const TYPE = 'object';

    public $conceptualActivityHash = [
        'type' => 'integer',
        'description' => 'The "Conceptual" activity hash. Basically, we picked the lowest level activity and are treating it as the canonical definition of the activity for rendering purposes.
If you care about the specific difficulty modes and variations, use the activities under "Variants".',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $variants = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneActivityVariantDefinition',
        ],
        'description' => 'A milestone-referenced activity can have many variants, such as Tiers or alternative modes of play.
Even if there is only a single variant, the details for these are represented within as a variant definition.
It is assumed that, if this DestinyMilestoneActivityDefinition is active, then all variants should be active.
If a Milestone could ever split the variants\' active status conditionally, they should all have their own DestinyMilestoneActivityDefinition instead! The potential duplication will be worth it for the obviousness of processing and use.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];


}

