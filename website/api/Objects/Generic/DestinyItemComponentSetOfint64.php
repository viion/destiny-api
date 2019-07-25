<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DestinyItemComponentSetOfint64
 */
class DestinyItemComponentSetOfint64
{

    const NAME = 'DestinyItemComponentSetOfint64';

    const TYPE = 'object';

    public $instances = [
        'x-destiny-component-type-dependency' => 'ItemInstances',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyItemInstanceComponent',
    ];

    public $perks = [
        'x-destiny-component-type-dependency' => 'ItemPerks',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyItemPerksComponent',
    ];

    public $renderData = [
        'x-destiny-component-type-dependency' => 'ItemRenderData',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyItemRenderComponent',
    ];

    public $stats = [
        'x-destiny-component-type-dependency' => 'ItemStats',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyItemStatsComponent',
    ];

    public $sockets = [
        'x-destiny-component-type-dependency' => 'ItemSockets',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyItemSocketsComponent',
    ];

    public $talentGrids = [
        'x-destiny-component-type-dependency' => 'ItemTalentGrids',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyItemTalentGridComponent',
    ];

    public $plugStates = [
        'x-destiny-component-type-dependency' => 'ItemPlugStates',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyItemPlugComponent',
    ];

    public $objectives = [
        'x-destiny-component-type-dependency' => 'ItemObjectives',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyItemObjectivesComponent',
    ];


}

