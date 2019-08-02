<?php

namespace App\Service\Destiny\Generator;

use Zend\Code\Generator\ClassGenerator;

/**
 * this builds Destiny API Objects
 */
class DestinyApiGenerateResponse extends DestinyApiGenerateAbstract
{
    /**
     * Build bath logic
     */
    public function build($schema)
    {
        // build class
        $cls = new ClassGenerator();

        if (array_key_exists('application/json', $schema['content'])) {
            [$object, $type] = $this->getResponseObjectAndType($schema);

            $namespace = str_ireplace('#/components/schemas/', null, $object);
            $namespace = str_ireplace('.', '\\', $namespace);
            $classname = explode('\\', $namespace);
            $classname = end($classname);

            $object    = self::API_NAMESPACE  . "\\Objects\\{$namespace}\\{$classname}::class";

            $cls->addConstant('TYPE', $type)
                ->addConstant('OBJECT', $object);
        }

        $this->write('Responses', $schema, $cls);
    }

    /**
     * Scrape out the response object and type
     */
    private function getResponseObjectAndType($schema): array
    {
        // grab ref based on types
        if (isset($schema['content']['application/json']['schema']['properties']['Response']['items']['$ref'])) {
            return [
                $schema['content']['application/json']['schema']['properties']['Response']['items']['$ref'],
                'array'
            ];
        } elseif (isset($schema['content']['application/json']['schema']['properties']['Response']['$ref'])) {
            return [
                $schema['content']['application/json']['schema']['properties']['Response']['$ref'],
                'object'
            ];
        }

        return [
            "Generic\\{$schema['namespace']}",
            'generic'
        ];
    }
}
