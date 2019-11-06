<?php

namespace Zwei\Collection\Contracts\Support;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \Zwei\Collection\Contracts\Support\MessageBag
     */
    public function getMessageBag();
}
