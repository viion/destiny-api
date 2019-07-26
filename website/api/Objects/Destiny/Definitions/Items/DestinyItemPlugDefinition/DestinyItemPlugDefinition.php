<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Items\DestinyItemPlugDefinition;

/**
 * DestinyItemPlugDefinition
 *
 * If an item is a Plug, its DestinyInventoryItemDefinition.plug property will be
 * populated with an instance of one of these bad boys.
 * This gives information about when it can be inserted, what the plug's category
 * is (and thus whether it is compatible with a socket... see
 * DestinySocketTypeDefinition for information about Plug Categories and socket
 * compatibility), whether it is enabled and other Plug info.
 */
class DestinyItemPlugDefinition
{

    const TYPE = 'object';

    public $insertionRules = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Items.DestinyPlugRuleDefinition',
        ],
        'description' => 'The rules around when this plug can be inserted into a socket, aside from the socket\'s individual restrictions.
The live data DestinyItemPlugComponent.insertFailIndexes will be an index into this array, so you can pull out the failure strings appropriate for the user.',
    ];

    public $plugCategoryIdentifier = [
        'type' => 'string',
        'description' => 'The string identifier for the plug\'s category. Use the socket\'s DestinySocketTypeDefinition.plugWhitelist to determine whether this plug can be inserted into the socket.',
    ];

    public $plugCategoryHash = [
        'type' => 'integer',
        'description' => 'The hash for the plugCategoryIdentifier. You can use this instead if you wish: I put both in the definition for debugging purposes.',
        'format' => 'uint32',
    ];

    public $onActionRecreateSelf = [
        'type' => 'boolean',
        'description' => 'If you successfully socket the item, this will determine whether or not you get "refunded" on the plug.',
    ];

    public $insertionMaterialRequirementHash = [
        'type' => 'integer',
        'description' => 'If inserting this plug requires materials, this is the hash identifier for looking up the DestinyMaterialRequirementSetDefinition for those requirements.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyMaterialRequirementSetDefinition',
        ],
    ];

    public $previewItemOverrideHash = [
        'type' => 'integer',
        'description' => 'In the game, if you\'re inspecting a plug item directly, this will be the item shown with the plug attached. Look up the DestinyInventoryItemDefinition for this hash for the item.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $enabledMaterialRequirementHash = [
        'type' => 'integer',
        'description' => 'It\'s not enough for the plug to be inserted. It has to be enabled as well. For it to be enabled, it may require materials. This is the hash identifier for the DestinyMaterialRequirementSetDefinition for those requirements, if there is one.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyMaterialRequirementSetDefinition',
        ],
    ];

    public $enabledRules = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Items.DestinyPlugRuleDefinition',
        ],
        'description' => 'The rules around whether the plug, once inserted, is enabled and providing its benefits.
The live data DestinyItemPlugComponent.enableFailIndexes will be an index into this array, so you can pull out the failure strings appropriate for the user.',
    ];

    public $uiPlugLabel = [
        'type' => 'string',
        'description' => 'Plugs can have arbitrary, UI-defined identifiers that the UI designers use to determine the style applied to plugs. Unfortunately, we have neither a definitive list of these labels nor advance warning of when new labels might be applied or how that relates to how they get rendered. If you want to, you can refer to known labels to change your own styles: but know that new ones can be created arbitrarily, and we have no way of associating the labels with any specific UI style guidance... you\'ll have to piece that together on your end. Or do what we do, and just show plugs more generically, without specialized styles.',
    ];

    public $plugStyle = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.PlugUiStyles',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $isPseudoPlug = [
        'type' => 'boolean',
        'description' => 'If TRUE, the plug doesn\'t actually convey any benefit: it only exists to show information in the UI.',
    ];

    public $plugAvailability = [
        'type' => 'integer',
        'description' => 'Indicates the rules about when this plug can be used. See the PlugAvailabilityMode enumeration for more information!',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.PlugAvailabilityMode',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $alternateUiPlugLabel = [
        'type' => 'string',
        'description' => 'If the plug meets certain state requirements, it may have an alternative label applied to it. This is the alternative label that will be applied in such a situation.',
    ];

    public $alternatePlugStyle = [
        'type' => 'integer',
        'description' => 'The alternate plug of the plug: only applies when the item is in states that only the server can know about and control, unfortunately. See AlternateUiPlugLabel for the related label info.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.PlugUiStyles',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $isDummyPlug = [
        'type' => 'boolean',
        'description' => 'If TRUE, this plug is used for UI display purposes only, and doesn\'t have any interesting effects of its own.',
    ];

    public $parentItemOverride = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Items.DestinyParentItemOverride',
            ],
        ],
        'description' => 'Do you ever get the feeling that a system has become so overburdened by edge cases that it probably should have become some other system entirely? So do I!
In totally unrelated news, Plugs can now override properties of their parent items. This is some of the relevant definition data for those overrides.
If this is populated, it will have the override data to be applied when this plug is applied to an item.',
    ];


}

