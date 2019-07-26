<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Items\DestinyPlugRuleDefinition;

/**
 * DestinyPlugRuleDefinition
 *
 * Dictates a rule around whether the plug is enabled or insertable.
 * In practice, the live Destiny data will refer to these entries by index. You can
 * then look up that index in the appropriate property (enabledRules or
 * insertionRules) to get the localized string for the failure message if it
 * failed.
 */
class DestinyPlugRuleDefinition
{

    const TYPE = 'object';

    public $failureMessage = [
        'type' => 'string',
        'description' => 'The localized string to show if this rule fails.',
    ];


}

