<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\ChoiceQuestion;

class GetUserInfoCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('get_user_info')
            ->setDescription('получение информации о пользователе')
            ->setHelp('This command allows you to create a user...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $questionName = new Question('Введите ваше имя: ', 'defaultName');
        $questionAge = new Question('Введите ваше возраст: ', 'defaultAge');
        $questionMale = new ChoiceQuestion(
        'Выберите ваш пол ',
        ['М', 'Ж'],            0
    );

        $bundleMale= $helper->ask($input, $output, $questionMale);
        $bundleName = $helper->ask($input, $output, $questionName);
        $bundleAge = $helper->ask($input, $output, $questionAge);

        $output->writeln("=============================");
        $output->writeln('Вы ввели имя: ' . $bundleName);
        $output->writeln('Вы ввели возраст:	 ' . $bundleAge);
        $output->writeln('Вы ввели ваш пол:	 ' . $bundleMale);
        $output->writeln('Здравствуйте,	' . $bundleName . ' Ваш возраст: ' . $bundleAge . ' Ваш пол: ' . $bundleMale);

        return Command::SUCCESS;
    }
}