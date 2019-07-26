<?php

namespace Destiny2\Api\Enums\Destiny\PlugAvailabilityMode;

/**
 * PlugAvailabilityMode
 *
 * This enum determines whether the plug is available to be inserted.
 * - Normal means that all existing rules for plug insertion apply.
 * - UnavailableIfSocketContainsMatchingPlugCategory means that the plug is only
 * available if the socket does NOT match the plug category.
 * - AvailableIfSocketContainsMatchingPlugCategory means that the plug is only
 * available if the socket DOES match the plug category.
 * For category matching, use the plug's "plugCategoryIdentifier" property,
 * comparing it to
 */
class PlugAvailabilityMode
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'Normal' => '0',
        'UnavailableIfSocketContainsMatchingPlugCategory' => '1',
        'AvailableIfSocketContainsMatchingPlugCategory' => '2',
    ];


}

