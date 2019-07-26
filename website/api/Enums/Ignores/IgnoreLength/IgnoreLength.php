<?php

namespace Destiny2\Api\Enums\Ignores\IgnoreLength;

/**
 * IgnoreLength
 *
 * No description
 */
class IgnoreLength
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
    ];

    const ENUMS = [
        'None' => '0',
        'Week' => '1',
        'TwoWeeks' => '2',
        'ThreeWeeks' => '3',
        'Month' => '4',
        'ThreeMonths' => '5',
        'SixMonths' => '6',
        'Year' => '7',
        'Forever' => '8',
        'ThreeMinutes' => '9',
        'Hour' => '10',
        'ThirtyDays' => '11',
    ];


}

