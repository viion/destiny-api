<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Sockets.DestinySocketTypeDefinition
 */
class Definitions.Sockets.DestinySocketTypeDefinition
{

    const NAME = 'Destiny.Definitions.Sockets.DestinySocketTypeDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'There are fields for this display data, but they appear to be unpopulated as of now. I am not sure where in the UI these would show if they even were populated, but I will continue to return this data in case it becomes useful.',
    ];

    public $insertAction = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Sockets.DestinyInsertPlugActionDefinition',
            ],
        ],
        'description' => 'Defines what happens when a plug is inserted into sockets of this type.',
    ];

    public $plugWhitelist = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Sockets.DestinyPlugWhitelistEntryDefinition',
        ],
        'description' => 'A list of Plug "Categories" that are allowed to be plugged into sockets of this type.
These should be compared against a given plug item\'s DestinyInventoryItemDefinition.plug.plugCategoryHash, which indicates the plug item\'s category.
If the plug\'s category matches any whitelisted plug, or if the whitelist is empty, it is allowed to be inserted.',
    ];

    public $socketCategoryHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Sockets.DestinySocketCategoryDefinition',
        ],
    ];

    public $visibility = [
        'type' => 'integer',
        'description' => 'Sometimes a socket isn\'t visible. These are some of the conditions under which sockets of this type are not visible. Unfortunately, the truth of visibility is much, much more complex. Best to rely on the live data for whether the socket is visible and enabled.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinySocketVisibility',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $alwaysRandomizeSockets = [
        'type' => 'boolean',
    ];

    public $isPreviewEnabled = [
        'type' => 'boolean',
    ];

    public $hideDuplicateReusablePlugs = [
        'type' => 'boolean',
    ];

    public $overridesUiAppearance = [
        'type' => 'boolean',
        'description' => 'This property indicates if the socket type determines whether Emblem icons and nameplates should be overridden by the inserted plug item\'s icon and nameplate.',
    ];

    public $avoidDuplicatesOnInitialization = [
        'type' => 'boolean',
    ];

    public $currencyScalars = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Sockets.DestinySocketTypeScalarMaterialRequirementEntry',
        ],
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

