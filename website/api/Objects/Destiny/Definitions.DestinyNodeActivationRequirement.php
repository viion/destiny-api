<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyNodeActivationRequirement
 */
class Definitions.DestinyNodeActivationRequirement
{

    const NAME = 'Destiny.Definitions.DestinyNodeActivationRequirement';

    const TYPE = 'object';

    public $gridLevel = [
        'type' => 'integer',
        'description' => 'The Progression level on the Talent Grid required to activate this node.
See DestinyTalentGridDefinition.progressionHash for the related Progression, and read DestinyProgressionDefinition\'s documentation to learn more about Progressions.',
        'format' => 'int32',
    ];

    public $materialRequirementHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The list of hash identifiers for material requirement sets: materials that are required for the node to be activated. See DestinyMaterialRequirementSetDefinition for more information about material requirements.
In this case, only a single DestinyMaterialRequirementSetDefinition will be chosen from this list, and we won\'t know which one will be chosen until an instance of the item is created.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyMaterialRequirementSetDefinition',
        ],
    ];


}

