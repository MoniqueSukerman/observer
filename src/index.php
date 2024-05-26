<?php

require 'vendor/autoload.php';

use Monique\Observer\Observer\EventManager;
use Monique\Observer\Observer\NotificationListener;

$eventManager = new EventManager();
$notificationListener = new NotificationListener();
$eventManager->subscribe($notificationListener);

$eventManager->changeState('Nova mudança na classe Subject');
