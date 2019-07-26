<?php

namespace Destiny2\Api\Objects\GroupsV2\ClanBanner;

/**
 * ClanBanner
 *
 * No description
 */
class ClanBanner
{

    const TYPE = 'object';

    public $decalId = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $decalColorId = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $decalBackgroundColorId = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $gonfalonId = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $gonfalonColorId = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $gonfalonDetailId = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $gonfalonDetailColorId = [
        'type' => 'integer',
        'format' => 'uint32',
    ];


}

