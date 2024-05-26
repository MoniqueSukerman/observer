<?php

namespace Monique\Observer\Observer;

class EventManager
{
    private array $listeners = [];

    public function subscribe(EventListener $listener)
    {
        $this->listeners[] = $listener;
    }

    public function unsubscribe(EventListener $listener)
    {
        $this->listeners = array_filter(
            $this->listeners,
            function($existingListener) use ($listener) {
                return $existingListener !== $listener;
            }
        );

        $this->listeners = array_values($this->listeners);
    }

    public function notify(string $data): void
    {
        /** @var EventListener $listener */
        foreach ($this->listeners as $listener) {
            $listener->update($data);
        }
    }

    public function changeState(string $data) {
        $this->notify($data);
    }
}