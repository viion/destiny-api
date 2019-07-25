<?php

namespace App\Command;

use App\Service\Destiny\Generator\DestinyApiGenerateEnum;
use App\Service\Destiny\Generator\DestinyApiGenerateObject;
use App\Service\Destiny\Generator\DestinyApiGeneratePath;
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
            $this->console->writeln("Path: <comment>{$schema['summary']}</comment>");

            $schema['uri'] = $uri;
            DestinyApiGeneratePath::build($schema);
        }

        //
        // Step 3) Build Component Schemas
        //
        $this->console->writeln("<info>Building: ". count($definition['components']['schemas']) ." API Component Schemas</info>");
        foreach ($definition['components']['schemas'] as $component => $schema) {
            $this->console->writeln("Component: <comment>{$component}</comment>");

            $schema['component'] = $component;

            // handle enums
            if (array_key_exists('enum', $schema)) {
                DestinyApiGenerateEnum::build($schema);
            }

            // handle objects
            if (array_key_exists('type', $schema) && $schema['type'] == 'object') {
                DestinyApiGenerateObject::build($schema);
            }
        }
    }
}
