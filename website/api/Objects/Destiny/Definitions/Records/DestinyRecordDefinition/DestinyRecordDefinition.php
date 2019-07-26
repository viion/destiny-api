<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Records\DestinyRecordDefinition;

/**
 * DestinyRecordDefinition
 *
 * No description
 */
class DestinyRecordDefinition
{

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $scope = [
        'type' => 'integer',
        'description' => 'Indicates whether this Record\'s state is determined on a per-character or on an account-wide basis.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyScope',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $presentationInfo = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Presentation.DestinyPresentationChildBlock',
    ];

    public $loreHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Lore.DestinyLoreDefinition',
        ],
    ];

    public $objectiveHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyObjectiveDefinition',
        ],
    ];

    public $recordValueStyle = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyRecordValueStyle',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $titleInfo = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Records.DestinyRecordTitleBlock',
    ];

    public $completionInfo = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Records.DestinyRecordCompletionBlock',
    ];

    public $stateInfo = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Records.SchemaRecordStateBlock',
    ];

    public $requirements = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Presentation.DestinyPresentationNodeRequirementsBlock',
    ];

    public $expirationInfo = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Records.DestinyRecordExpirationBlock',
    ];

    public $rewardItems = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DestinyItemQuantity',
        ],
        'description' => 'If there is any publicly available information about rewards earned for achieving this record, this is the list of those items.
 However, note that some records intentionally have "hidden" rewards. These will not be returned in this list.',
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

