<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Components.Profiles.DestinyProfileProgressionComponent
 */
class Components.Profiles.DestinyProfileProgressionComponent
{

    const NAME = 'Destiny.Components.Profiles.DestinyProfileProgressionComponent';

    const TYPE = 'object';

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
        'description' => 'The set of checklists that can be examined on a profile-wide basis, keyed by the hash identifier of the Checklist (DestinyChecklistDefinition)
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

