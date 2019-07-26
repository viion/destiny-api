<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyItemActionBlockDefinition;

/**
 * DestinyItemActionBlockDefinition
 *
 * If an item can have an action performed on it (like "Dismantle"), it will be
 * defined here if you care.
 */
class DestinyItemActionBlockDefinition
{

    const TYPE = 'object';

    public $verbName = [
        'type' => 'string',
        'description' => 'Localized text for the verb of the action being performed.',
    ];

    public $verbDescription = [
        'type' => 'string',
        'description' => 'Localized text describing the action being performed.',
    ];

    public $isPositive = [
        'type' => 'boolean',
        'description' => 'The content has this property, however it\'s not entirely clear how it is used.',
    ];

    public $overlayScreenName = [
        'type' => 'string',
        'description' => 'If the action has an overlay screen associated with it, this is the name of that screen. Unfortunately, we cannot return the screen\'s data itself.',
    ];

    public $overlayIcon = [
        'type' => 'string',
        'description' => 'The icon associated with the overlay screen for the action, if any.',
    ];

    public $requiredCooldownSeconds = [
        'type' => 'integer',
        'description' => 'The number of seconds to delay before allowing this action to be performed again.',
        'format' => 'int32',
    ];

    public $requiredItems = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyItemActionRequiredItemDefinition',
        ],
        'description' => 'If the action requires other items to exist or be destroyed, this is the list of those items and requirements.',
    ];

    public $progressionRewards = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyProgressionRewardDefinition',
        ],
        'description' => 'If performing this action earns you Progression, this is the list of progressions and values granted for those progressions by performing this action.',
    ];

    public $actionTypeLabel = [
        'type' => 'string',
        'description' => 'The internal identifier for the action.',
    ];

    public $requiredLocation = [
        'type' => 'string',
        'description' => 'Theoretically, an item could have a localized string for a hint about the location in which the action should be performed. In practice, no items yet have this property.',
    ];

    public $requiredCooldownHash = [
        'type' => 'integer',
        'description' => 'The identifier hash for the Cooldown associated with this action. We have not pulled this data yet for you to have more data to use for cooldowns.',
        'format' => 'uint32',
    ];

    public $deleteOnAction = [
        'type' => 'boolean',
        'description' => 'If true, the item is deleted when the action completes.',
    ];

    public $consumeEntireStack = [
        'type' => 'boolean',
        'description' => 'If true, the entire stack is deleted when the action completes.',
    ];

    public $useOnAcquire = [
        'type' => 'boolean',
        'description' => 'If true, this action will be performed as soon as you earn this item. Some rewards work this way, providing you a single item to pick up from a reward-granting vendor in-game and then immediately consuming itself to provide you multiple items.',
    ];


}

