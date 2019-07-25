<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DestinyItemComponentSetOfint32
 */
class DestinyItemComponentSetOfint32
{

    const NAME = 'DestinyItemComponentSetOfint32';

    const TYPE = 'object';

    public $instances = [
        'x-destiny-component-type-dependency' => 'ItemInstances',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint32AndDestinyItemInstanceComponent',
    ];

    public $perks = [
        'x-destiny-component-type-dependency' => 'ItemPerks',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint32AndDestinyItemPerksComponent',
    ];

    public $renderData = [
        'x-destiny-component-type-dependency' => 'ItemRenderData',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint32AndDestinyItemRenderComponent',
    ];

    public $stats = [
        'x-destiny-component-type-dependency' => 'ItemStats',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint32AndDestinyItemStatsComponent',
    ];

    public $sockets = [
        'x-destiny-component-type-dependency' => 'ItemSockets',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint32AndDestinyItemSocketsComponent',
    ];

    public $talentGrids = [
        'x-destiny-component-type-dependency' => 'ItemTalentGrids',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint32AndDestinyItemTalentGridComponent',
    ];

    public $plugStates = [
        'x-destiny-component-type-dependency' => 'ItemPlugStates',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyItemPlugComponent',
    ];

    public $objectives = [
        'x-destiny-component-type-dependency' => 'ItemObjectives',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint32AndDestinyItemObjectivesComponent',
    ];


}

