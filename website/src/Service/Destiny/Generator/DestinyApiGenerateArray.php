<?php

namespace App\Service\Destiny\Generator;

use Zend\Code\Generator\ClassGenerator;

/**
 * this builds Destiny API Objects
 */
class DestinyApiGenerateArray extends DestinyApiGenerateAbstract
{
    /**
     * Build bath logic
     */
    public function build($schema)
    {
        // build class
        $cls = new ClassGenerator();
        $cls->addConstant('TYPE', $schema['type'])
            ->addConstant('ITEMS', [
                'type'          => $schema['items']['type'],
                'description'   => $schema['items']['description'] ?? null,
                'format'        => $schema['items']['format'],
                'reference'     => $schema['items']['x-enum-reference']['$ref'],
                'is_bitmask'    => $schema['items']['x-enum-is-bitmask'],
            ]);

        $this->write('Types', $schema, $cls);
    }
}
