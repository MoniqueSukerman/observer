<?php

namespace Monique\Observer\Observer;

use Monique\Observer\Observer\EventListener;

class NotificationListener implements EventListener
{

    public function update(string $data)
    {
        echo "Novo evento identificado: $data \n";
    }
}