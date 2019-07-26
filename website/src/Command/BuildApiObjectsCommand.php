<?php

namespace App\Command;

use App\Service\Destiny\Generator\DestinyApiGenerateArray;
use App\Service\Destiny\Generator\DestinyApiGenerateEnum;
use App\Service\Destiny\Generator\DestinyApiGenerateObject;
use App\Service\Destiny\Generator\DestinyApiGeneratePath;
use App\Service\Destiny\Generator\DestinyApiGenerateResponse;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;
use Zend\Code\Generator\ValueGenerator;

class BuildApiObjectsCommand extends Command
{
    /**
     * @var ConsoleOutput
     */
    private $console;

    protected function configure()
    {
        $this
            ->setName('app:build:api')
            ->setDescription('Creates the entire Destiny 2 API')
            ->setHelp('Run this, and watch the magic happen')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->console = new ConsoleOutput();

        // Step 1) Get the Destiny API Schema
        $this->console->writeln("Downloading API Schema");
        $definition = file_get_contents('https://raw.githubusercontent.com/Bungie-net/api/master/openapi.json');
        $definition = json_decode($definition, true);

        $this->console->writeln($definition['info']['title']);
        $this->console->writeln($definition['info']['description']);
        $this->console->writeln("");

        //
        // Step 2) Build paths
        //
        $this->console->writeln("<info>Building: ". count($definition['paths']) ." API Endpoint Paths</info>");
        foreach ($definition['paths'] as $uri => $schema) {
            $schema = $this->buildClassNameAndNameSpace($schema['summary'], $schema);
            $schema['uri'] = $uri;

            $this->console->writeln("Write: <comment>{$schema['namespace']} --> {$schema['classname']}</comment>");

            DestinyApiGeneratePath::build($schema);
        }

        //
        // Step 3) Build Component Schemas
        //
        $this->console->writeln("<info>Building: ". count($definition['components']['schemas']) ." API Component Schemas</info>");
        foreach ($definition['components']['schemas'] as $component => $schema) {
            $schema = $this->buildClassNameAndNameSpace($component, $schema);

            $this->console->writeln("Write: <comment>{$schema['namespace']} --> {$schema['classname']}</comment>");

            // handle enums
            if (array_key_exists('enum', $schema)) {
                DestinyApiGenerateEnum::build($schema);
                continue;
            }

            // handle objects
            if (array_key_exists('type', $schema) && $schema['type'] == 'object') {
                DestinyApiGenerateObject::build($schema);
                continue;
            }

            // handle arrays
            if (array_key_exists('type', $schema) && $schema['type'] == 'array') {
                DestinyApiGenerateArray::build($schema);
                continue;
            }

            print_r($schema);
            throw new \Exception("Unknown schema");
        }

        //
        // Step 4) Build Response Schemas
        //
        $this->console->writeln("<info>Building: ". count($definition['components']['responses']) ." API Response Schemas</info>");
        foreach ($definition['components']['responses'] as $component => $schema) {
            $schema = $this->buildClassNameAndNameSpace($component, $schema);
            DestinyApiGenerateResponse::build($schema);
        }

    }

    /**
     * Build the class name and namespace from a pattern
     */
    private function buildClassNameAndNameSpace(string $namespace, array $schema)
    {
        $namespace = str_ireplace('[]', null, $namespace);
        $namespace = $namespace[0] == '.' ? "Generic.{$namespace}" : $namespace;
        $namespace = str_ireplace('.', '\\', $namespace);

        $classname = explode('\\', $namespace);
        $classname = end($classname);

        $schema['namespace'] = $namespace;
        $schema['classname'] = $classname;

        return $schema;
    }
}
