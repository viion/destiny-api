<?php

namespace Destiny2\Api\Objects\Destiny\Entities\Characters\DestinyCharacterProgressionComponent;

/**
 * DestinyCharacterProgressionComponent
 *
 * This component returns anything that could be considered "Progression" on a
 * user: data where the user is gaining levels, reputation, completions, rewards,
 * etc...
 */
class DestinyCharacterProgressionComponent
{

    const TYPE = 'object';

    public $progressions = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.DestinyProgression',
        ],
        'description' => 'A Dictionary of all known progressions for the Character, keyed by the Progression\'s hash.
Not all progressions have user-facing data, but those who do will have that data contained in the DestinyProgressionDefinition.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyProgressionDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $factions = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Progression.DestinyFactionProgression',
        ],
        'description' => 'A dictionary of all known Factions, keyed by the Faction\'s hash. It contains data about this character\'s status with the faction.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyFactionDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $milestones = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Milestones.DestinyMilestone',
        ],
        'description' => 'Milestones are related to the simple progressions shown in the game, but return additional and hopefully helpful information for users about the specifics of the Milestone\'s status.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $quests = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Quests.DestinyQuestStatus',
        ],
        'description' => 'If the user has any active quests, the quests\' statuses will be returned here.
Note that quests have been largely supplanted by Milestones, but that doesn\'t mean that they won\'t make a comeback independent of milestones at some point.',
    ];

    public $uninstancedItemObjectives = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'array',
            'items' => [
                '$ref' => '#/components/schemas/Destiny.Quests.DestinyObjectiveProgress',
            ],
        ],
        'description' => 'Sometimes, you have items in your inventory that don\'t have instances, but still have Objective information. This provides you that objective information for uninstanced items. 
This dictionary is keyed by the item\'s hash: which you can use to look up the name and description for the overall task(s) implied by the objective. The value is the list of objectives for this item, and their statuses.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $checklists = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'object',
            'additionalProperties' => [
                'type' => 'boolean',
            ],
            'x-dictionary-key' => [
                'type' => 'integer',
                'format' => 'uint32',
            ],
        ],
        'description' => 'The set of checklists that can be examined for this specific character, keyed by the hash identifier of the Checklist (DestinyChecklistDefinition)
For each checklist returned, its value is itself a Dictionary keyed by the checklist\'s hash identifier with the value being a boolean indicating if it\'s been discovered yet.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Checklists.DestinyChecklistDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];


}

