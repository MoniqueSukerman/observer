<?php

namespace Monique\Observer\Observer;

interface EventListener
{
    public function update(string $data);
}