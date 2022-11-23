<?php

namespace FacebookAds\Object\ServerSide;

interface Filter
{
    /**
     * Returns a boolean on whether the event should be filtered
     * @param Event $event
     * @return bool
     */
    public function shouldSendEvent(Event $event): bool;
}
