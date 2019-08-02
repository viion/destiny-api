<?php

namespace App\Service\Destiny\Generator;

use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\FileGenerator;

class DestinyApiGenerateAbstract
{
    const API_NAMESPACE = 'Destiny2\\Api';

    /**
     * Write generated code to file
     */
    public function write($type, $schema, ClassGenerator $cls)
    {
        // Append the type to the namespace
        $schema['namespace'] = "{$type}\\{$schema['namespace']}";

        $cls->setName($schema['classname'])
            ->setNamespaceName(self::API_NAMESPACE .'\\'. $schema['namespace'])
            ->setDocBlock(
                DocBlockGenerator::fromArray([
                    'shortDescription' => $schema['classname'],
                    'longDescription'  => $schema['description'] ?? 'No description'
                ])
            );

        // build filename
        $classname = "{$schema['classname']}.php";

        // build folder
        $folder = __DIR__ ."/../../../../api/{$schema['namespace']}";
        $folder = str_ireplace('\\', '/', $folder);

        // make folder if it does not exist
        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }

        $file = FileGenerator::fromArray([
            'classes' => [ $cls ],
        ]);

        // Save code
        file_put_contents("{$folder}/{$classname}", $file->generate());
    }

    /**
     * Detect the HTTP method use by the path schema
     */
    public function getMethod(array $schema): string
    {
        if (isset($schema['get'])) {
            return 'GET';
        }

        if (isset($schema['post'])) {
            return 'POST';
        }

        print_r($schema);

        throw new \Exception("Unknown Schema HTTP Method");
    }
}
