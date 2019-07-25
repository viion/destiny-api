<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Checklists.DestinyChecklistDefinition
 */
class Definitions.Checklists.DestinyChecklistDefinition
{

    const NAME = 'Destiny.Definitions.Checklists.DestinyChecklistDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $viewActionString = [
        'type' => 'string',
        'description' => 'A localized string prompting you to view the checklist.',
    ];

    public $scope = [
        'type' => 'integer',
        'description' => 'Indicates whether you will find this checklist on the Profile or Character components.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyScope',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $entries = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Checklists.DestinyChecklistEntryDefinition',
        ],
        'description' => 'The individual checklist items. Gotta catch \'em all.',
    ];

    public $hash = [
        'type' => 'integer',
        'description' => 'The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.
When entities refer to each other in Destiny content, it is this hash that they are referring to.',
        'format' => 'uint32',
    ];

    public $index = [
        'type' => 'integer',
        'description' => 'The index of the entity as it was found in the investment tables.',
        'format' => 'int32',
    ];

    public $redacted = [
        'type' => 'boolean',
        'description' => 'If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!',
    ];


}

