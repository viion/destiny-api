<?php

namespace App\Service\Destiny\Generator;

use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\PropertyGenerator;

/**
 * this builds Destiny API Objects
 */
class DestinyApiGenerateObject extends DestinyApiGenerateAbstract
{
    /**
     * Build bath logic
     */
    public function build($schema)
    {
        $cls = new ClassGenerator();
        $cls->addConstant('TYPE', $schema['type']);

        if (array_key_exists('properties', $schema)) {
            foreach ($schema['properties'] as $propName => $propSchema) {
                $cls->addProperty(
                    $propName,
                    $propSchema,
                    PropertyGenerator::FLAG_PUBLIC
                );
            }
        }

        $this->write('Objects', $schema, $cls);
    }
}
