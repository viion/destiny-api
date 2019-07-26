<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyItemObjectiveBlockDefinition;

/**
 * DestinyItemObjectiveBlockDefinition
 *
 * An item can have objectives on it. In practice, these are the exclusive purview
 * of "Quest Step" items: DestinyInventoryItemDefinitions that represent a specific
 * step in a Quest.
 * Quest steps have 1:M objectives that we end up processing and returning in live
 * data as DestinyQuestStatus data, and other useful information.
 */
class DestinyItemObjectiveBlockDefinition
{

    const TYPE = 'object';

    public $objectiveHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The hashes to Objectives (DestinyObjectiveDefinition) that are part of this Quest Step, in the order that they should be rendered.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyObjectiveDefinition',
        ],
    ];

    public $displayActivityHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'For every entry in objectiveHashes, there is a corresponding entry in this array at the same index. If the objective is meant to be associated with a specific DestinyActivityDefinition, there will be a valid hash at that index. Otherwise, it will be invalid (0).
Rendered somewhat obsolete by perObjectiveDisplayProperties, which currently has much the same information but may end up with more info in the future.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $requireFullObjectiveCompletion = [
        'type' => 'boolean',
        'description' => 'If True, all objectives must be completed for the step to be completed. If False, any one objective can be completed for the step to be completed.',
    ];

    public $questlineItemHash = [
        'type' => 'integer',
        'description' => 'The hash for the DestinyInventoryItemDefinition representing the Quest to which this Quest Step belongs.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $narrative = [
        'type' => 'string',
        'description' => 'The localized string for narrative text related to this quest step, if any.',
    ];

    public $objectiveVerbName = [
        'type' => 'string',
        'description' => 'The localized string describing an action to be performed associated with the objectives, if any.',
    ];

    public $questTypeIdentifier = [
        'type' => 'string',
        'description' => 'The identifier for the type of quest being performed, if any. Not associated with any fixed definition, yet.',
    ];

    public $questTypeHash = [
        'type' => 'integer',
        'description' => 'A hashed value for the questTypeIdentifier, because apparently I like to be redundant.',
        'format' => 'uint32',
    ];

    public $perObjectiveDisplayProperties = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyObjectiveDisplayProperties',
        ],
        'description' => 'One entry per Objective on the item, it will have related display information.',
    ];


}

