<?php

namespace Destiny2\Api\Objects\DictionaryComponentResponseOfint64AndDestinyCurrenciesComponent;

/**
 * DictionaryComponentResponseOfint64AndDestinyCurrenciesComponent
 *
 * No description
 */
class DictionaryComponentResponseOfint64AndDestinyCurrenciesComponent
{

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'CurrencyLookups',
            '$ref' => '#/components/schemas/Destiny.Components.Inventory.DestinyCurrenciesComponent',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'int64',
        ],
    ];

    public $privacy = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Components.ComponentPrivacySetting',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

