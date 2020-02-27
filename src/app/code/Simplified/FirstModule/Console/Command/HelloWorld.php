<?php

namespace Simplified\FirstModule\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{
    public function configure()
    {
        $this->setName('training:hello_world')
            ->setDescription('It prints Hello World')
            ->setAliases(['hw'])
            ->setDefinition([new InputArgument('name', InputArgument::OPTIONAL, 'The name of the person')]);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World, ' . $input->getArgument('name'));
    }
}