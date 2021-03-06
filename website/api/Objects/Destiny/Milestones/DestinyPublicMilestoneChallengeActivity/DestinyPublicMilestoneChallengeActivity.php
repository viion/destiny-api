<?php

namespace Destiny2\Api\Objects\Destiny\Milestones\DestinyPublicMilestoneChallengeActivity;

/**
 * DestinyPublicMilestoneChallengeActivity
 *
 * No description
 */
class DestinyPublicMilestoneChallengeActivity
{

    const TYPE = 'object';

    public $activityHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $challengeObjectiveHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $modifierHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'If the activity has modifiers, this will be the list of modifiers that all variants have in common. Perform lookups against DestinyActivityModifierDefinition which defines the modifier being applied to get at the modifier data.
Note that, in the DestiyActivityDefinition, you will see many more modifiers than this being referred to: those are all *possible* modifiers for the activity, not the active ones. Use only the active ones to match what\'s really live.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.ActivityModifiers.DestinyActivityModifierDefinition',
        ],
    ];

    public $loadoutRequirementIndex = [
        'type' => 'integer',
        'description' => 'If returned, this is the index into the DestinyActivityDefinition\'s "loadouts" property, indicating the currently active loadout requirements.',
        'format' => 'int32',
        'nullable' => true,
    ];

    public $phaseHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The ordered list of phases for this activity, if any. Note that we have no human readable info for phases, nor any entities to relate them to: relating these hashes to something human readable is up to you unfortunately.',
    ];

    public $booleanActivityOptions = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'boolean',
        ],
        'description' => 'The set of activity options for this activity, keyed by an identifier that\'s unique for this activity (not guaranteed to be unique between or across all activities, though should be unique for every *variant* of a given *conceptual* activity: for instance, the original D2 Raid has many variant DestinyActivityDefinitions. While other activities could potentially have the same option hashes, for any given D2 base Raid variant the hash will be unique).
As a concrete example of this data, the hashes you get for Raids will correspond to the currently active "Challenge Mode".
We have no human readable information for this data, so it\'s up to you if you want to associate it with such info to show it.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];


}

