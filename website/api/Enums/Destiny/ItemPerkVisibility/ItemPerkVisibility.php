<?php

namespace Destiny2\Api\Enums\Destiny\ItemPerkVisibility;

/**
 * ItemPerkVisibility
 *
 * Indicates how a perk should be shown, or if it should be, in the game UI. Maybe
 * useful for those of you trying to filter out internal-use-only perks (or for
 * those of you trying to figure out what they do!)
 */
class ItemPerkVisibility
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'Visible' => '0',
        'Disabled' => '1',
        'Hidden' => '2',
    ];


}

