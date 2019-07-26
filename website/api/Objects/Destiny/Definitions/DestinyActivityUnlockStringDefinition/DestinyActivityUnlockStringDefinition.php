<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyActivityUnlockStringDefinition;

/**
 * DestinyActivityUnlockStringDefinition
 *
 * Represents a status string that could be conditionally displayed about an
 * activity. Note that externally, you can only see the strings themselves.
 * Internally we combine this information with server state to determine which
 * strings should be shown.
 */
class DestinyActivityUnlockStringDefinition
{

    const TYPE = 'object';

    public $displayString = [
        'type' => 'string',
        'description' => 'The string to be displayed if the conditions are met.',
    ];


}

