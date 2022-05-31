<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SayHelloCommand extends Command
{
	protected function configure(): void
    {
        $this
        	->setName('say_hello')
        	->setDescription('привет что-то')
            ->setHelp('This command allows you to create a user...')
            ->addArgument('string', InputArgument::REQUIRED, 'string')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
    	$output->writeln('Привет '. $input->getArgument('string'));

        return Command::SUCCESS;
    }
}
