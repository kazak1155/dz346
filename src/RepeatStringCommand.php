<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class RepeatStringCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('str_repeat')
            ->setDescription('вывод 2 раза строки, которую ввел пользователь')
            ->setHelp('This command allows you to create a user...')
            ->addArgument('string', InputArgument::REQUIRED, 'string')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $times = 2;

        $output->writeln(str_repeat($input->getArgument('string'), $times));
        
        return Command::SUCCESS;
    }
}
