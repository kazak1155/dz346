<?php

use Symfony\Component\Console\Application;
use App\SayHelloCommand;
use App\RepeatStringCommand;
use App\GetUserInfoCommand;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Application('dz346');

$app->add(new SayHelloCommand());
$app->add(new RepeatStringCommand());
$app->add(new GetUserInfoCommand());

$app->run();
