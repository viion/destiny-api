<?php

namespace Destiny2\Api\Objects\DestinyItemComponentSetOfuint32;

/**
 * DestinyItemComponentSetOfuint32
 *
 * No description
 */
class DestinyItemComponentSetOfuint32
{

    const TYPE = 'object';

    public $instances = [
        'x-destiny-component-type-dependency' => 'ItemInstances',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyItemInstanceComponent',
    ];

    public $perks = [
        'x-destiny-component-type-dependency' => 'ItemPerks',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyItemPerksComponent',
    ];

    public $renderData = [
        'x-destiny-component-type-dependency' => 'ItemRenderData',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyItemRenderComponent',
    ];

    public $stats = [
        'x-destiny-component-type-dependency' => 'ItemStats',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyItemStatsComponent',
    ];

    public $sockets = [
        'x-destiny-component-type-dependency' => 'ItemSockets',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyItemSocketsComponent',
    ];

    public $talentGrids = [
        'x-destiny-component-type-dependency' => 'ItemTalentGrids',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyItemTalentGridComponent',
    ];

    public $plugStates = [
        'x-destiny-component-type-dependency' => 'ItemPlugStates',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyItemPlugComponent',
    ];

    public $objectives = [
        'x-destiny-component-type-dependency' => 'ItemObjectives',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyItemObjectivesComponent',
    ];


}

